<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('email.contact');
    }
 
    public function store(ContactRequest $request)
    {
        Mail::to('boubacarpoulo6@gmail.com')
            ->queue(new Contact($request->except('_token')));
 
        return view('confirm');
    }

}
