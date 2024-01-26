<?php
namespace App\interface;
interface TeacherInterface{
    public function index();
    public function create();
    public function store( $request);
    public function edit( $id);
    public function update( $request,  $Teacher);
    public function destroy( $id);
}

?>