<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact_page;
use App\Mail\SendEmail;
 use Mail;

 
class sendEmailController extends Controller
{
    function index (){
        return view('website.contact');
    }
    function saveContact(Request $request){
       
        $contact=new Contact_page;
        $this->validate($request, [
            'posText'=>'required',
            'posName'=>'required',
            'posEmail'=>'required|email',
            'posTel'=>'required',
        ]);
        $contact->name = $request->posName;
        $contact->email = $request->posEmail;
        $contact->subject = "No subject";
        $contact->phone_number = $request->posTel;
        $contact->message = $request->posText;
        $contact->save();
        $data =[
                    'name' => $request->get('posName'),
                    'email' => $request->get('posEmail'),
                    'subject' => "no subject",
                    'phone_number' => $request->get('posTel'),
                    'user_message' => $request->get('posText'),
        ];

        Mail::to('mohamed.kh1994@live.com')->send(new SendEmail($data)); 

        Mail::send('mail.contuctMailTemplate',
             array(
                 'name' => $request->get('posName'),
                 'email' => $request->get('posEmail'),
                 'subject' => "no subject",
                 'phone_number' => $request->get('posTel'),
                 'user_message' => $request->get('posText'),
             ), function($message) use ($request)
               {
                  $message->from($request->posEmail);
                  $message->to('mohamed.kh1994@live.com');
                  
               });
               
        return back()->with('success', 'Thank you for contact us!');
    }
    public function destroy($id)
    {
        Contact_page::destroy($id);
        // return redirect()->Route('dashboard.contact.index');
    }


    // function send(Request $request){
    //     $rules =[
    //         'posText'=>'required',
    //         'posName'=>'required',
    //         'posEmail'=>'required|email',
    //         'posTel'=>'required',
    //     ];
      
    //  Mail::to('mohamed.kh1994@live.com')->send(new SendMail($data));
    //  return redirect()->back()->with('success', 'Thanks for contacting us!');
    // }
}
