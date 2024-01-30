<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    protected $redirectTo=RouteServiceProvider::AdminHome;
    function Login(){
        return view("AdminAuth.login");
    }
    function check(Request $request){
        $request->validate([
            'email' => "required|regex:/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/",
            'password' => ['required', 'string', 'min:8']
        ]);

        if(Auth::guard('admin')->attempt($request->only(["email","password"]))){
            return redirect()->intended($this->redirectTo);
        }
        else{
            return redirect()->back()->withInput($request->only("email"))->with("error","Email Or Password Not Correct ");
        }
    }
    function logout(){
        Auth::guard("admin")->logout();
        return redirect()->route("Admin.Login");
    }
    
}
