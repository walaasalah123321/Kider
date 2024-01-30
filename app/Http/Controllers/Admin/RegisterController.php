<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function Register(){
        return view("AdminAuth.register");
    }
    function store(Request $request){
        $request->validate([
            "name" => "required|string",
            'email' => "required|unique:admins|regex:/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/",
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);
        $data=$request->except("_token","password_confirmation");
        $data["password"]=Hash::make($data["password"]);
        Admin::create($data);
        return redirect()->route("Admin.Login");
    }
}
