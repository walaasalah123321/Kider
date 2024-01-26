<?php
namespace App\repostry\Testimonial;

use App\Models\Testimonal;
use App\traits\UploadImage;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\interface\Testimonial\TestimonialInterface;

class TestimonialRepo implements TestimonialInterface{
    use UploadImage;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query=Testimonal::Query();
        $request=Request();
        if($search=$request->table_search){
            $query->where("name","LIKE","%$search%")->orWhere("postion","LIKE","%$search%");
        }
        $data=$query->get();
        confirmDelete("delete", " you are sure Delet Record");

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
      
        $message=$this->massages();
        $data=$request->validate([
            "name" =>"required|min:3",
            "postion" =>"required",
            "opinion" =>"required",
            "image"=>"required|mimes:png,jpg,jpeg|max:2048",
        ],$message);
        $data["image"]=$this->uploadFile($request->image,"admin/testimonial/images");
        Testimonal::create($data);
        Alert::success('Add', 'Add Successfuly');
        return redirect()->back(); 
    }
    /**
     * Display the specified resource.
     */
    public function show(Testimonal $testimonal)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $data=Testimonal::findOrFail($id);
        return view("admin.testimonal.edit",compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $testimonal)
    {
        $message=$this->massages();
        $data=$request->validate([
            "name" =>"required|min:3",
            "postion" =>"required",
            "opinion" =>"required",
            "image"=>"mimes:png,jpg,jpeg|max:2048",
        ],$message);
        $test=Testimonal::findOrFail($testimonal);
        if($request->has("image")){
        $data["image"]=$this->uploadFile($request->image,"admin/testimonial/images");
        unlink("admin/testimonial/images/".$test->image);
        }
        $test->update($data);
        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $test=Testimonal::findOrFail($id)->delete();
        // unlink("admin/testimonial/images/".$test->image);
        Alert::success("Delete" ,"Delete Successfully");
       return redirect()->back();
    }
    public  function massages(){
        return  [
              "name.required" =>"pleace enter your name",
              "opinion.required" =>"pleace enter your opinion ",
              "image.required" =>"pleace enter your image ",
              "postion.required" =>"pleace enter your postion ",
              "name.min" =>"pleace enter your name max 3 number",

          ];
      }

}


?>