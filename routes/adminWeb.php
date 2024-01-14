<?php

use App\Http\Controllers\KiderController;
use App\Http\Controllers\TestimonalController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::group(["prefix"=>"Admins","as"=>"Admin."],function(){  
    Route::group(["prefix"=>"Testmonial","as"=>"Testmonial."],function(){
        Route::get("create",[TestimonalController::class,"create"])->name("create");
        Route::post("store",[TestimonalController::class,"store"])->name("store");
        Route::get("show",[TestimonalController::class,"index"])->name("show");
        Route::get("delete/{id}",[TestimonalController::class,"destroy"])->name("delete");
    });

});


