<?php

namespace App\Http\Controllers;
use App\Proprietes;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $propriete = Proprietes::all()->take(6);
        return view('home',compact('propriete'));
    }

   
}
