<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Booking;
class HomeController extends Controller
{
   public function index(){
        $data['Bookings']=Booking::select('patient_id','commit','created_at')->paginate(5);
        return view('admin.home')->with($data);
   }
}
