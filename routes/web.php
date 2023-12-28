<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\doctorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/index', function () {
    return view('healthify/index');
});

Route::get('/about', function () {
    return view('healthify/about');
});

Route::get('/doctors', function () {
    return view('healthify/doctors');
});

Route::get('/appointment',[appointmentController::class,'create']);
Route::post('/appointment',[appointmentController::class,'store']);

Route::get('/contact',[contactController::class,'create']);
Route::post('/contact',[contactController::class,'store']);

Route::get('/profile',[registrationController::class,'profile']); 
Route::get('/profile/{id}',[registrationController::class,'edit']); 

Route::post('/profile/{id}',[registrationController::class,'update']); 

Route::get('/signup',[registrationController::class,'create']);
Route::post('/signup',[registrationController::class,'store']);

Route::get('/login',[registrationController::class,'login']);
Route::post('/login_auth',[registrationController::class,'login_auth']);

Route::get('/logout',[registrationController::class,'logout']);

Route::get('/blog', function () {
    return view('healthify/blog');
});

Route::get('/detail', function () {
    return view('healthify/detail');
});

Route::get('/service', function () {
    return view('healthify/service');
});

Route::get('/testimonial', function () {
    return view('healthify/testimonial');
});

Route::get('/price', function () {
    return view('healthify/price');
});

Route::get('/search', function () {
    return view('healthify/search');
});

Route::get('/team', function () {
    return view('healthify/team');
});


///////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/dr_login',[doctorController::class,'dr_login']);
Route::post('/drlogin_auth',[doctorController::class,'login_auth']);

Route::get('/doctorlogout',[doctorController::class,'doctorlogout']);

Route::get('/dashboard', function () {
    return view('doctor/dashboard');
});

Route::get('/manage_appointment',[appointmentController::class,'show']);
Route::get('/delete/{id}',[appointmentController::class,'destroy']);

Route::get('/editappointment/{id}',[appointmentController::class,'edit']);

Route::post('/update/{id}',[appointmentController::class,'update']);

Route::get('/view_patients',[registrationController::class,'show']);

Route::get('/view_patients/{id}',[registrationController::class,'status']);