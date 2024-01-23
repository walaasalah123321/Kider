<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherRequest;
use App\traits\UploadImage;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherController extends Controller
{
    use UploadImage;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        confirmDelete("delete", " you are sure Delet Record");

        $teachers=Teacher::paginate(1);
        return view("admin.Teacher.showAll",compact("teachers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.Teacher.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {

        $data=$request->only("name","position","facebook","twitter","instagram");
        $data["image"]=$this->uploadFile($request->image,"admin/Teacher/images");
        $data["publish"]=isset($request->publish);
        Teacher::create($data);
       Alert::success("Add ","Add Successfully");
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $teacher)
    {
        $Teacher=Teacher::findOrFail($teacher);
        return view("admin.Teacher.edit",compact("Teacher"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $teacher)
    {
        $data=$request->validate(
        [
            "name"=>"required",
            "position"=>"required",
            "facebook"=>"sometimes",
            "twitter"=>"sometimes",
            "instagram"=>"sometimes",
            "image"=>"sometimes|mimes:png,jpg,jpeg|max:2048"
        ]
        );
        if($request->has("image")){
            $data["image"]=$this->uploadFile($request->image,"admin/Teacher/images");
        }
        $data["publish"]=isset($request->publish);
        Teacher::where("id",$teacher)->update($data);
        Alert::success("Done ","Update Successfully");
        return redirect()->route("Admin.Teacher.show");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $teacher)
    {
        $teacher=Teacher::findOrFail($teacher);
        unlink("admin/Teacher/images/".$teacher->image);
        $teacher->delete();
        Alert::success("Delete" ,"Delete Successfully");
       return redirect()->back();

    }
}
