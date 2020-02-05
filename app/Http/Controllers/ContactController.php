<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('email.create');
    }
 
    public function store(ContactRequest $request)
    {
        $data = $request->validate([
            'email'=>'required|min:8',
            'message'=>'required|max:2',
            ]);
         
         $contact =  new \App\Contact();

         //dd($request->input('Type_de_proprietes_id'));
         $contact->email = $request->input('email');
         $contact->message = $request->input('message');
         $propriete->users_id= $request->input('users_id');
         $propriete->users_id  = Auth::id();
         $propriete->save();
         return redirect('/')->with(['success' => "Message enregistré"]);
      ///
        Mail::to('boubacarpoulo6@gmail.com')
            ->queue(new Contact($request->except('_token')));
 
        return view('home');
    }

}
