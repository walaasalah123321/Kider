<?php
namespace App\repostry;

use App\Models\Subject;
use App\Models\Teacher;
use App\traits\UploadImage;

use App\interface\SubjectInterface;
use function PHPUnit\Framework\isNull;
use RealRashid\SweetAlert\Facades\Alert;

class SubjectRepo implements SubjectInterface{
    use UploadImage;
    public function index()
    {
        confirmDelete("delete", " you are sure Delete Record");
        $teacher=Subject::get();
        return view("admin.Subject.showAll",compact("teacher"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers=Teacher::where("publish",1)->get();
        return view("admin.Subject.create",compact("teachers"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( $request)
    {
        $data=$request->validate(
            [
                "title"=>"required",
                "Capacity"=>"required",
                "Salary"=>"required",
                "StartTime"=>"required",
                "EndTime"=>"required",
                "StartAge"=>"required|integer",
                "EndAge"=>"required|integer",
                "image"=>"required|mimes:png,jpg,jpeg|max:2048",
                "Teacher_id"=>"required",
            ]
            );
            // $StartTime = $request->StartTime;
            // $EndTime = $request->EndTime;
            // // Parse the input time using Carbon
            // $BeginTime = Carbon::createFromFormat('H:i A', $StartTime);
            // $LastTime = Carbon::createFromFormat('H:i A', $EndTime);
            // // Format the parsed time as needed
            // $data["StartTime"] = $BeginTime->format('H:i A');
            // $data["EndTime"] = $LastTime->format('H:i A');
            // dd($data);
            $data["image"]=$this->uploadFile($request->image,"admin/Subject/images");
            $data["publish"]=isset($request->publish);
            Subject::create($data);
            Alert::success('Add', 'Add Successfuly');
            return redirect()->back(); 

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $teachers=Teacher::where("publish",1)->get();
        $subject=Subject::findOrFail($id);
        return view("admin.Subject.edit",compact("teachers","subject"));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update( $request,$id)
    {
        $data=$request->validate(
            [
                "title"=>"required",
                "Capacity"=>"required",
                "Salary"=>"required",
                "StartTime"=>"required",
                "EndTime"=>"required",
                "StartAge"=>"required|integer",
                "EndAge"=>"required|integer",
                "image"=>"sometimes|mimes:png,jpg,jpeg|max:2048",
                "Teacher_id"=>"required",
            ]
            );
     
            if($request->has("image")){

                $data["image"]=$this->uploadFile($request->image,"admin/Subject/images");

            }
            $data["publish"]=isset($request->publish);
            $subject=Subject::where("id",$id)->update($data);
            Alert::success('Done', 'Update Successfuly');
            return redirect()->route("Admin.Subject.show"); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $test=Subject::findOrFail($id);
        unlink("admin/Subject/images/".$test->image);
        $test->delete();
        Alert::success("Delete" ,"Delete Successfully");
       return redirect()->back();
    }

}

?>