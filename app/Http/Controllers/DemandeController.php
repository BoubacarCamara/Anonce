<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function index(){
        $demand = \App\Demande::orderBy('created_at', 'DESC')->get();
        return view('demande.index', compact('demand'));
     }
      
    
public function create()
{
   return view('demande.create');
}
    public function store(Request $request)
{
   $produit = new Demande();
   $Demande->date = $request->input('date');
   $Demande->price = $request->input('price');
   $Demande->description = $request->input('description');
   $Demande->save();
   return redirect('/');
}

}