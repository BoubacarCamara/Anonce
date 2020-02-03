<?php

namespace App\Http\Controllers;
use App\Type_de_propriete;
use App\Proprietes;
use App\Type_anonce;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $propriete = Proprietes::all()->take(12);
        $type_de_propriete=Type_de_propriete::pluck('nom', 'id');
        $anonce = Type_anonce::pluck('type','id');
        $loc = Proprietes::pluck('localisation','id');
        return view('home',compact('propriete','type_de_propriete','loc','anonce'));
    }

   
}
