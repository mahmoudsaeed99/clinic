<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Booking;
use App\Patient;

class HomeController extends Controller
{
   public function index(){
        $data['Bookings']=Booking::select('patient_id','commit','created_at')->paginate(5);
        return view('admin.home')->with($data);
   }
   function getPatient(Request $request){
      $data=$request->validate([
         'search'    => 'required|regex:/(0)[0-9]{9}/'
       ]);
       $pateint = Patient::select('id')->where('mobile' ,"=", $data['search'])->get();
       if($pateint->count() > 0){
         return redirect('admin/patient/profile/'.$pateint[0]->id.'');
       }
       else{
         return redirect('admin/get/patient/form');
       }

   }
   function getPatientForm(){
      return view('admin.patientForm');
   }
   function patientRegister(Request $request){
      // echo "mahmoud";
      $data=$request->validate([
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
       return redirect('admin/home') ;
   }
   function patientProfile($id){
      $patient['patient'] = Patient::findorfail($id);
      // dd($patient);
      return view('front.profile')->with($patient);
   }
}
