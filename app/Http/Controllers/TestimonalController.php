<?php

namespace App\Http\Controllers;

use App\Models\Testimonal;
use App\traits\UploadImage;
use Illuminate\Http\Request;

class TestimonalController extends Controller
{
    use UploadImage;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Testimonal::get();
        return view("admin.testimonal.showAll",compact("data"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.testimonal.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $data=$request->validate([
            "name" =>"required|min:5",
            "postion" =>"required",
            "opinion" =>"required",
            "image"=>"mimes:png,jpg,jpeg|max:2048",
        ]);
        $data["image"]=$this->uploadFile($request->image,"admin/testimonial/images");
        Testimonal::create($data);
        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonal $testimonal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonal $testimonal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonal $testimonal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Testimonal::findOrFail($id)->delete();
       return redirect()->back();
    }
    public  function massages(){
        return  [
              "name.required" =>"pleace enter your name",
              "opinion.required" =>"pleace enter your opinion ",
          ];
      }
}
