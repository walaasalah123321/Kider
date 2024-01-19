<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Testimonal;
use Illuminate\Http\Request;

class KiderController extends Controller
{
    public function __invoke()
    {
        return view("Kidder.Error404");
    }
    public function index(){
        return view("Kidder.index");
    }
    public function about(){
        return view("Kidder.About");
    }
    public function classes(){
        return view("Kidder.Classes");
    }
    public function contact(){
        return view("Kidder.Contact");
    }
    public function facilities(){
        return view("Kidder.Facilities");
    }
    public function teacher(){
        $teacher=Teacher::where("publish","1")->get();
        return view("Kidder.teachers",compact("teacher"));
    }
    public function call(){
        return view("Kidder.Call");
    }
    public function Testimonial()  {
        $data=Testimonal::get();
        return view("Kidder.Testimonial",compact("data"));
    }
    public function Appointment()  {
        return view("Kidder.Appointment");
    }

}
