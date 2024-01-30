<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Admin\RegisterController;
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
Route::group(["prefix"=>"Admins","as"=>"Admin."],function(){
    Route::get("Login",[LoginController::class,"Login"])->name("Login");
    Route::post("logout",[LoginController::class,"logout"])->name("logout");
    Route::post("Login",[LoginController::class,"check"])->name("check");
    Route::get("Register",[RegisterController::class,"Register"])->name("Register");
    Route::post("Register",[RegisterController::class,"store"])->name("store");
});

Route::group(["prefix"=>"Admins/Contact","as"=>"Admin.Contact."],function(){
    Route::post("store",[ContactUsController::class,"store"])->name("store");
});
Route::group(["prefix"=>"Admins/Appointment","as"=>"Admin.Appointment."],function(){
    Route::post("store",[AppointmentController::class,"store"])->name("store");

});

Route::group(["prefix"=>"Admins","as"=>"Admin.","middleware"=>"auth:admin"],function(){  
    Route::group(["prefix"=>"Testmonial","as"=>"Testmonial.","controller"=>TestimonalController::class],function(){
        Route::get("create","create")->name("create");
        Route::post("store","store")->name("store");
        Route::get("show","index")->name("show");
        Route::DELETE("delete/{id}","destroy")->name("delete");
        Route::get("edit/{id}","edit")->name("edit");
        Route::put("updata/{id}","update")->name("update");
    });
    Route::group(["prefix"=>"Appointment","as"=>"Appointment.","controller"=>AppointmentController::class],function(){
        Route::get("showAll","index")->name("showAll");
        Route::DELETE("delete/{id}","destroy")->name("delete");
        Route::get("show/{id}","show")->name("show");
    });
    Route::group(["prefix"=>"Contact","as"=>"Contact.","controller"=>ContactUsController::class],function(){
        Route::get("showAll","index")->name("showAll");
        Route::DELETE("delete/{id}","destroy")->name("delete");
        Route::get("show/{id}","show")->name("show");
        Route::get("unreadMessage","unread")->name("unread");

    });
    

    Route::group(["prefix"=>"Teacher","as"=>"Teacher.","controller"=>TeacherController::class],function(){
        Route::get("create","create")->name("create");
        Route::post("store","store")->name("store");
        Route::get("show","index")->name("show");
        Route::DELETE("delete/{id}","destroy")->name("delete");
        Route::get("edit/{id}","edit")->name("edit");
        Route::put("update/{id}","update")->name("update");
    });
    Route::group(["prefix"=>"Subjects","as"=>"Subject.","controller"=>SubjectController::class],function(){
        Route::get("create","create")->name("create");
        Route::post("store","store")->name("store");
        Route::get("show","index")->name("show");
        Route::DELETE("delete/{id}","destroy")->name("delete");
        Route::get("edit/{id}","edit")->name("edit");
        Route::put("update/{id}","update")->name("update");
    });

  
});



