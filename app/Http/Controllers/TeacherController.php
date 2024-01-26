<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherRequest;
use App\interface\TeacherInterFace;
use App\traits\UploadImage;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherController extends Controller
{
   
    public $Teacher;
    function __construct(TeacherInterFace $teacher)
    {
        $this->Teacher=$teacher;
    }

    public function index()
    {
        return $this->Teacher->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->Teacher->create();

    }


    public function store(TeacherRequest $request)
    {
         return $this->Teacher->store($request);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $teacher)
    {
        return $this->Teacher->edit($teacher);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $teacher)
    {
        return $this->Teacher->update($request,$teacher);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $teacher)
    {
        return $this->Teacher->destroy($teacher);
       

    }
}
