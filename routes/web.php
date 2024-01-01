<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(["prefix"=>"Kidder","as"=>"Kidder."],function(){
    Route::get("/",function(){
        return view("Kidder.index");
    })->name("index");
    Route::get("About",function(){
        return view("Kidder.About");
    })->name("about");
});

