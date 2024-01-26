<?php
namespace App\interface\Testimonial;

use App\Models\Testimonal;
use Illuminate\Http\Request;

interface TestimonialInterface{
    public function index();
    public function create();
    public function store(Request $request);
    public function show(Testimonal $testimonal);
    public function edit( $id);
    public function update(Request $request,  $testimonal);
    public function destroy( $id);
    public  function massages();
}

?>