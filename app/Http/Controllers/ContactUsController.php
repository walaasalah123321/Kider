<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Contact_us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message=Contact_us::get();
        confirmDelete("delete", " you are sure Delet Record");
        return view("admin.contact_us.showAll",compact("message"));
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
            "name"=>"required",
            "email"=>"required",
            "subject"=>"required",
            "message"=>"required",
        ]);
        Contact_us::create($data);
        Mail::to("admin@gmail.com")->send(new Contact($request));
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $message=Contact_us::findOrFail($id);
        return view("admin.contact_us.showMessage" ,compact("message"));

        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact_us $contact_us)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact_us $contact_us)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Contact_us::findOrFail($id)->delete();
        Alert::success("Delete" ,"Delete Successfully");
       return redirect()->back();
    }
}
