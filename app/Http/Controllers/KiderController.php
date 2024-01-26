<?php

namespace App\Http\Controllers;

use App\interface\KiderInterface;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Testimonal;
use Illuminate\Http\Request;

class KiderController extends Controller
{
    public $Kider;
    function __construct(KiderInterface $Kider)
    {
        $this->Kider=$Kider;
    }
    public function __invoke()
    {
        return view("Kidder.Error404");
    }
    public function index(){
       return $this->Kider->index();
    }
    public function about(){
        return $this->Kider->about();

    }
    public function classes(){
        return $this->Kider->classes();

    }
    public function contact(){
        return $this->Kider->contact();
    }
    public function facilities(){
        return $this->Kider->facilities();
    }
    public function teacher(){
        return $this->Kider->teacher();

    }
    public function call(){
        return $this->Kider->call();
    }
    public function Testimonial()  {
        
        return $this->Kider->Testimonial();
    }
    public function Appointment()  {
        return $this->Kider->Appointment();
    }

}
