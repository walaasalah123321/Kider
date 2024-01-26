<?php
namespace App\interface;

interface ContactInterface{
    public function index();
    public function show( $id);
    public function store( $request);
    public function destroy( $id);
    function unread();

}

?>