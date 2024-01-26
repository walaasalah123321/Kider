<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\KiderController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TestimonalController;
use App\Models\Appointment;
use App\Models\Teacher;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::group(["prefix"=>"Admins/Contact","as"=>"Admin.Contact."],function(){
    Route::post("store",[ContactUsController::class,"store"])->name("store");
});
Route::group(["prefix"=>"Admins/Appointment","as"=>"Admin.Appointment."],function(){
    Route::post("store",[AppointmentController::class,"store"])->name("store");

});

Route::group(["prefix"=>"Admins","as"=>"Admin.","middleware"=>"verified"],function(){  
    Route::group(["prefix"=>"Testmonial","as"=>"Testmonial."],function(){
        Route::get("create",[TestimonalController::class,"create"])->name("create");
        Route::post("store",[TestimonalController::class,"store"])->name("store");
        Route::get("show",[TestimonalController::class,"index"])->name("show");
        Route::DELETE("delete/{id}",[TestimonalController::class,"destroy"])->name("delete");
        Route::get("edit/{id}",[TestimonalController::class,"edit"])->name("edit");
        Route::put("updata/{id}",[TestimonalController::class,"update"])->name("update");
    });
    Route::group(["prefix"=>"Appointment","as"=>"Appointment."],function(){
        Route::get("showAll",[AppointmentController::class,"index"])->name("showAll");
        Route::DELETE("delete/{id}",[AppointmentController::class,"destroy"])->name("delete");
        Route::get("show/{id}",[AppointmentController::class,"show"])->name("show");



    });
    Route::group(["prefix"=>"Contact","as"=>"Contact."],function(){
        Route::get("showAll",[ContactUsController::class,"index"])->name("showAll");
        Route::DELETE("delete/{id}",[ContactUsController::class,"destroy"])->name("delete");
        Route::get("show/{id}",[ContactUsController::class,"show"])->name("show");
        Route::get("unreadMessage",[ContactUsController::class,"unread"])->name("unread");

    });
    

    Route::group(["prefix"=>"Teacher","as"=>"Teacher."],function(){
        Route::get("create",[TeacherController::class,"create"])->name("create");
        Route::post("store",[TeacherController::class,"store"])->name("store");
        Route::get("show",[TeacherController::class,"index"])->name("show");
        Route::DELETE("delete/{id}",[TeacherController::class,"destroy"])->name("delete");
        Route::get("edit/{id}",[TeacherController::class,"edit"])->name("edit");
        Route::put("update/{id}",[TeacherController::class,"update"])->name("update");
    });
    Route::group(["prefix"=>"Subjects","as"=>"Subject."],function(){
        Route::get("create",[SubjectController::class,"create"])->name("create");
        Route::post("store",[SubjectController::class,"store"])->name("store");
        Route::get("show",[SubjectController::class,"index"])->name("show");
        Route::DELETE("delete/{id}",[SubjectController::class,"destroy"])->name("delete");
        Route::get("edit/{id}",[SubjectController::class,"edit"])->name("edit");
        Route::put("update/{id}",[SubjectController::class,"update"])->name("update");
    });

  
});


