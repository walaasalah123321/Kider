<?php
namespace App\interface;
interface AppointmentInterface{
    public function index();
    public function show( $id);
    public function store( $request);
    public function destroy( $id);
}

?>