<?php

namespace App\Http\Controllers;

use App\interface\AppointmentInterface;
use App\Models\Appointment;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AppointmentController extends Controller
{
    public $Appointment;
    function __construct(AppointmentInterface $Appoint)
    {
        $this->Appointment=$Appoint;
    }

    public function index()
    {
       return $this->Appointment->index();
    }
 
    public function store(Request $request)
    {
        return $this->Appointment->store($request);

    }

    public function show( $id)
    {
        
        return $this->Appointment->show($id);
       
    }

 
    public function destroy(  $id)
    {
       return $this->Appointment->index($id);
        
    }
}
