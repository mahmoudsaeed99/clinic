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

Route::get('/', function () {
    return view('admin.login');
});
Route::post('/loginHandle','Admin@logHandle');
Route::get('/home', function () {
    return view('admin.home');
});
Route::get('/service', 'Admin@getService');
Route::get('/service/update/{id}/{price}', 'Admin@updateService');
Route::post('/service/add', 'Admin@addService');
Route::get('/get/form', 'Admin@getUserForm');
Route::get('/userform','Admin@getUserForm');
Route::get('/teeth', function () {
    return view('front.teeth');
});
Route::get('/image', function () {
    return view('front.images');
});
