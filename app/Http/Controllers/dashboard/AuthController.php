<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\admin;
//use Illuminate\Contracts\Auth\Authenticatable;
class AuthController extends Controller
{
  public function adminLogin()
  {
    return view('admin.auth.login');
  }
  public function adminHandelLogin(Request $request)
  {
    $data = $request->validate([
      'name' => 'required|string',
      'password' => 'required|string'
    ]);
    if (!Auth()->guard('admin')->attempt(['name' => $data['name'], 'password' => $data['password']])) {
      return back();
    }
    else{
      return redirect('admin/home');
    }
  }
  public function logout(){
    //using Auth() helper function to avoid making use Auth
    Auth()->guard('admin')->logout();
    return redirect('/');
}
}
