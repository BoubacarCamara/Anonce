<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AbonnementController extends Controller
{
    public function expired(){
        $name = "camara";
        $date = "31 - 12 -2019";
        Illuminate\Support\Facades\Mail::to('boubacarpoulo6@gmail.com')->send(new AbonnementMail($name, $date));
        return "Message envoyé";
     }
}
