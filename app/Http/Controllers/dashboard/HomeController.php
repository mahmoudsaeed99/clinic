<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Booking;
use App\Patient;
use Image;
use App\Images;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function index()
   {
      $data['Bookings'] = Booking::select('patient_id', 'commit', 'created_at')->paginate(5);
      return view('admin.home')->with($data);
   }
   //search function
   function getPatient(Request $request)
   {
      $data = $request->validate([
         'search'    => 'required|regex:/(0)[0-9]{9}/'
      ]);
      $pateint = Patient::select('id')->where('mobile', "=", $data['search'])->get();
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
      $patient->paidMoney = 0;
      $patient->note = $data['note'];
      $patient->save();
      return redirect('admin/home');
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
      Images::make($data['img'])->resize(100, 100)->save(public_path('images/uploads/' . $newName));
      $data['img'] = $newName;

      $newImg = new Images();
      $newImg->patient_id = $request->id;
      $newImg->img = $data['img'];
      $newImg->save();
      // return url('patient/images/'.$request->id);
      return back();
   }
   function showTeeth($id)
   {
      $patient['patient'] = Patient::findorfail($id);
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
}
