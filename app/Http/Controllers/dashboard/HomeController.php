<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Booking;
use App\Patient;
use Image;
use App\Images;
use App\LowerDenture;
use App\UpperDenture;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function index()
   {

      $date = today();
      $data['Bookings'] = Booking::select('id', 'patient_id', 'commit', 'created_at')->where('created_at' ,$date)->paginate(5);
      return view('admin.home')->with($data);
   }
  

   function bookChange($id)
   {
      $book = Booking::findorfail($id);
      if ($book->commit == 1) {
         $book->commit = 0;
      } else {
         $book->commit = 1;
      }
      $book->save();
   }
   function getPatient(Request $request)
   {
      $data = $request->validate([
         'search'    => 'required'
      ]);
      //('name','like','%'.$data['search'].'%')


      $pateint = Patient::select('id')->where("mobile", "=", $data['search'])->orWhere("name", "=", $data['search'])->get();
      //  dd( $pateint);
      if ($pateint->count() > 0) {
         return redirect('/patient/profile/' . $pateint[0]->id . '');
      } else {

         return redirect('admin/get/patient/form');
      }
   }
   function getPatientForm()
   {
      return view('admin.patientForm');
   }
   function patientRegister(Request $request)
   {
      // echo "mahmoud";
      $data = $request->validate([
         'firstname'    => 'required|min:10',
         'age'    => 'required',
         'mobile'    => 'required|regex:/(0)[0-9]{9}/',
         'heart'    => 'required',
         'diabetes'    => 'required',
         'allergy'    => 'required',
         'bledding'    => 'required',
         'note' => 'required'
      ]);
      $patient = new Patient();
      $patient->name = $data['firstname'];
      $patient->age = $data['age'];
      $patient->mobile = $data['mobile'];
      $patient->heart = $data['heart'];
      $patient->diabetes = $data['diabetes'];
      $patient->allergy = $data['allergy'];
      $patient->bleed = $data['bledding'];
      $patient->totalMoney = 0;
      $patient->note = $data['note'];
      $patient->save();
      $lower  = new LowerDenture();
      $lower->patient_id = $patient->id;
      $lower->save();
      $upper  = new UpperDenture();
      $upper->patient_id = $patient->id;
      $upper->save();
      return redirect('admin/home');
   }
   function create_lower_dentures($patientID)
   {
      $lower  = new LowerDenture();
      $lower->patient_id = $patientID;
      for ($i = 16; $i < 33; $i++) {
         $lower->$i = "";
      }
   }
   function create_upper_dentures($patientID)
   {
      $upper  = new UpperDenture();
      $upper->patient_id = $patientID;
      for ($i = 16; $i < 33; $i++) {
         $upper->$i = "";
      }
   }
   function changeTeethColor($patient_id, $type, $teethName, $color)
   {
      if ($type == "upper") {
         UpperDenture::where('patient_id', $patient_id)->update([$teethName => $color]);
      } else {
         LowerDenture::where('patient_id', $patient_id)->update([$teethName => $color]);
      }
   }
   function patientProfile($id)
   {
      $patient['patient'] = Patient::findorfail($id);
      // dd($patient);
      return view('front.profile')->with($patient);
   }
   function images($id)
   {
      $patient['patient'] = Patient::findorfail($id);
      return view('front.images')->with($patient);
   }
   function addImage(Request $request)
   {
      $data = $request->validate([
         'img' => 'required|image|mimes:jpeg,jpg,png'
      ]);
      $data['id'] = $request->id;
      $newName = $data['img']->hashName();
      Image::make($data['img'])->resize(100, 100)->save(public_path('images/uploads/' . $newName));
      $data['img'] = $newName;

      $newImg = new Images();
      $newImg->patient_id = $request->id;
      $newImg->img = $data['img'];
      $newImg->save();

      return back();
   }
   function showTeeth($id)
   {
      $patient['patient'] = Patient::findorfail($id);
      $patient['upper'] = UpperDenture::where('patient_id', $id)->first();
      $patient['lower'] = LowerDenture::where('patient_id', $id)->first();
      return view('front.teeth')->with($patient);
   }
   function addPatientService($pateint_id, $service_id)
   {
      DB::insert('insert into patient_service (patient_id, service_id) values (?, ?)', [$pateint_id, $service_id]);
   }
   function addMoney($pateint_id, $price)
   {
      $pateint = Patient::findorfail($pateint_id);
      $pateint->totalMoney = $pateint->totalMoney  + $price;
      $pateint->save();
   }
   function bookingDate($pateint_id, $date)
   {
      // bookings
      $book  = new Booking();
      $book->patient_id = $pateint_id;
      $book->commit = 0;
      $book->created_at = $date;
      $book->save();
   }
   function calculation(Request $request)
   {
      $data = $request->validate([
         'totalMoney' => 'required|numeric'

      ]);
      $oldTotalMoney = Patient::findorfail($request->id)->totalMoney;
      $data['id'] = $request->id;
      $data['totalMoney'] = $oldTotalMoney - $data['totalMoney'];

      Patient::findorfail($request->id)->update($data);
      return back();
   }
}
