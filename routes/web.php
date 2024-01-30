<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Controllers\KiderController;
use App\Http\Controllers\TestimonalController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::fallback(KiderController::class);

Route::group(["prefix"=>"Kidder","as"=>"Kidder.","controller"=>KiderController::class],function(){
    Route::get("/",'index')->name("index");
    Route::get("About" ,"about")->name("about");
    Route::get("classes","classes")->name("classes");
    Route::get("contact",'contact')->name("contact");
    Route::get("Facilities","facilities")->name("Facilities");
    Route::get("teacher","teacher")->name("teachers");
    Route::get("BecomeTeacher","call")->name("call");
    Route::get("testimonial","Testimonial")->name("Testimonial");
    Route::get("Appointment","Appointment")->name("Appointment");


});
Auth::routes(["verify"=>true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
