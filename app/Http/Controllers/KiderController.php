<?php

namespace App\Http\Controllers;

use App\Models\Subject;
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
        $teacher=Teacher::where("publish","1")->get();
        $data=Testimonal::get();
        $classes=Subject::where("publish",1)->get();

        return view("Kidder.index",compact("teacher","data","classes"));
    }
    public function about(){

        $teacher=Teacher::where("publish","1")->get();
        return view("Kidder.About",compact("teacher"));
    }
    public function classes(){
        $data=Testimonal::get();
        $classes=Subject::where("publish",1)->get();

        return view("Kidder.Classes",compact("data","classes"));
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
