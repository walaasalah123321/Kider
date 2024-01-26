<?php 
namespace App\repostry;

use App\Models\Appointment;
use App\interface\AppointmentInterface;
use RealRashid\SweetAlert\Facades\Alert;

class AppointmentRepo implements AppointmentInterface{

    public function index()
    {
        $data=Appointment::get();
        confirmDelete("delete", " you are sure Delet Record");

        return view("admin.Appointment.showAll",compact("data"));
    }
    public function store( $request)
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

    
    public function show( $id)
    {
        
        $appointment=Appointment::findOrFail($id);
        return view("admin.Appointment.showAppointment",compact("appointment"));
    }

 
    public function destroy(  $id)
    {
        $test=Appointment::findOrFail($id)->delete();
        Alert::success("Delete" ,"Delete Successfully");
       return redirect()->back();
    }
    
}

?>