<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use Illuminate\Http\Request;

use Mail;
class SendEmailController extends Controller
{
    function index()
    {
     return view('send_email');
    }
    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'email'   =>   $request->email,
            'message'   =>   $request->message
        );
     Mail::to('bouba.camara.contact@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Merci message bien Reçu !!!');

    }
}
