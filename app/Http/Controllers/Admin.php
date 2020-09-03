<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
class Admin extends Controller
{
    //
    function logHandle(Request $request){
                    
    }
    function getService(){
             return view('admin.services');       
    }
    function addService(Request $request){
         $request->validate({
          'name'=>'string|required|unique',
          
         });
                   
    }
    function updateService(){
            //  return view('admin.services');       
    }
    function getUserForm(){
        return view('admin.patientForm');
    }


}
