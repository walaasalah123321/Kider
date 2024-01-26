<?php

namespace App\Http\Controllers;

use App\interface\Testimonial\TestimonialInterface;
use App\Models\Testimonal;
use App\traits\UploadImage;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TestimonalController extends Controller
{
    use UploadImage;
    public $testimonialInterface;
    function __construct(TestimonialInterface $testimonial)
    {
        $this->testimonialInterface=$testimonial;
    }
   
    public function index()
    {
       return $this->testimonialInterface->index();
    }

    public function create()
    {
       return $this->testimonialInterface->create();

    }
    public function store(Request $request)
    {
        return $this->testimonialInterface->store($request);
    }
    public function edit( $id)
    {
       return $this->testimonialInterface->edit($id);
    }

    public function update(Request $request,  $testimonal)
    {
        return $this->testimonialInterface->update($request,$testimonal);
    }

    public function destroy( $id)
    {
        return $this->testimonialInterface->destroy($id);
       
    }
    public  function massages(){
        return $this->testimonialInterface->massages();
      
      }
}
