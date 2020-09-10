<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    
    public function allServices(){
        $data['services']=Services::select('id','name','price')->orderBy('id','DESC')->paginate(4);
             return view('admin.services.allservices')->with($data);       
    }
    function addService(Request $request){
        $data=$request->validate([
            'name' =>'required|string|max:50',
            'price' =>'required|numeric'
            ]);
        Services::create($data);
   
        return redirect('admin/service');
       
                   
    }
    function updateService($id , Request $request){
      $data=$request->validate([
        'price'=>'required',
      ]);
       Services::findOrFail($id)->update($data);
       return redirect('admin/service');
                
    }
    function deleteService($id){
       Services::findOrFail($id)->delete();
       return redirect('admin/service');
                
    }
   
  
}
