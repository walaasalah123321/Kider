<?php 
namespace App\repostry;
use App\Mail\Contact;
use App\Models\Contact_us;
use App\interface\ContactInterface;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactRepo implements ContactInterface{

  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message=Contact_us::get();
        confirmDelete("delete", " you are sure Delet Record");
        return view("admin.contact_us.showAll",compact("message"));
    }

    function unread(){
        $message=Contact_us::where("read",0)->get();
        confirmDelete("delete", " you are sure Delet Record");
        return view("admin.contact_us.UnreadMessage",compact("message"));
    }

 
    /**
     * Store a newly created resource in storage.
     */
    public function store( $request)
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
        $message->update(["read"=>1]);
        return view("admin.contact_us.showMessage" ,compact("message"));

        
    }

    public function destroy($id)
    {
        Contact_us::findOrFail($id)->delete();
        Alert::success("Delete" ,"Delete Successfully");
       return redirect()->back();
    }
    
}

?>