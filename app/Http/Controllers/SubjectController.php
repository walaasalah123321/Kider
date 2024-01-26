<?php

namespace App\Http\Controllers;
use App\interface\SubjectInterface;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public $subject;
    function __construct(SubjectInterface $subject)
    {
        $this->subject=$subject;
    }

    public function index()
    {
       return $this->subject->index();
    }


    public function create()
    {
        return $this->subject->create();
    }

    public function store(Request $request)
    {
        return $this->subject->store($request);
 

    }

 
    public function edit( $id)
    {
 
       return $this->subject->edit($id);

    }

    public function update(Request $request,$id)
    {
        return $this->subject->update($request,$id);
       
    }


    public function destroy($id)
    {
       return $this->subject->destroy($id);
        
    }
}
