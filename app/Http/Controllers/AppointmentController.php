<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Appointment::get();
        confirmDelete("delete", " you are sure Delet Record");

        return view("admin.Appointment.showAll",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            "Gurdian_name"=>"required",
            "Gurdian_email"=>"required",
            "Child_name"=>"required",
            "Child_age"=>"required|integer",
            "message"=>"required",
        ]);
        Appointment::create($data);
        return redirect()->route("Kidder.Appointment");
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        
        $appointment=Appointment::findOrFail($id);
        return view("admin.Appointment.showAppointment",compact("appointment"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(  $id)
    {
        $test=Appointment::findOrFail($id)->delete();
        Alert::success("Delete" ,"Delete Successfully");
       return redirect()->back();
    }
}
