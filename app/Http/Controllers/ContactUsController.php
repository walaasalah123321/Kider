<?php

namespace App\Http\Controllers;

use App\interface\ContactInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactUsController extends Controller
{
    public $contact;
    function __construct(ContactInterface $contact)
    {
        $this->contact=$contact;
    }

    public function index()
    {
        return $this->contact->index();
    }
    function unread(){
        return $this->contact->unread();
      
    }

    public function store(Request $request)
    {
        return $this->contact->store($request);


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return $this->contact->show($id);
        
    }

 
    public function destroy($id)
    {
        return $this->contact->destroy($id);
        
    }
}
