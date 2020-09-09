<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::namespace('dashboard')->group(function(){

   Route::prefix('admin')->group(function(){
    Route::get('/','AuthController@adminLogin');
    Route::post('/loginHandle','AuthController@adminHandelLogin');
    Route::get('/service', 'ServiceController@allServices');
    Route::post('/service/add', 'ServiceController@addService');
    Route::post('/service/update/{id}', 'ServiceController@updateService');
    Route::get('/service/delete/{id}', 'ServiceController@deleteService');
    Route::get('/home','HomeController@index');
    Route::post('/get/patient','HomeController@getPatient');
    Route::get('/get/patient/form','HomeController@getPatientForm');
    Route::post('/get/patient/register','HomeController@patientRegister');
    
   });
   Route::prefix('patient')->group(function(){
       Route::get('/images/{id}','HomeController@images');
       Route::post('/addImages','HomeController@addImage');
       Route::get('/profile/{id}','HomeController@patientProfile');
       Route::get('/teeth/{id}','HomeController@showTeeth');
       Route::get('/add/service/{patient_id}/{service_id}','HomeController@addPatientService');
       Route::get('/add/money/{patient_id}/{price}','HomeController@addMoney');
       Route::get('/bookDate/{patient_id}/{Date}','HomeController@bookingDate');
   });
    
    Route::middleware('adminAuth:admin')->group(function(){
        
    });
});