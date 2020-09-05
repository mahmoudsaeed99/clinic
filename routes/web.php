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
Route::namespace('dashboard')->prefix('admin')->group(function(){


    Route::get('/','AuthController@adminLogin');
    Route::post('/loginHandle','AuthController@adminHandelLogin');
    Route::get('/home','HomeController@index');
    Route::middleware('adminAuth:admin')->group(function(){
        Route::get('/service', 'ServiceController@allServices');
        Route::post('/service/add', 'ServiceController@addService');
        Route::get('/service/update/{$id}', 'Admin@updateService');
    });
});