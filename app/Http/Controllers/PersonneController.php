<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function affiche(){
        $perso = \App\Personne::orderBy('created_at', 'DESC')->get();
        return view('personne.affiche', compact('perso'));
     }
      
    
public function create()
{
   return view('personne.create');
}
    public function store(Request $request)
{
   
   $data = $request->validate([
      'nom'=>'required|min:5',
      'prenom'=>'required|max:7',
      'adress'=>'max:1000000',
      'telephone'=>'max:100'
      ,'email'=>'max:30',
      'status'=>'max:20']);

   //dd($request->input('nom'));
   $perso = new \App\Personne();
   $perso->nom = $request->input('nom');
   $perso->prenom = $request->input('prenom');
   $perso->adress = $request->input('adress');
   $perso->telephone = $request->input('telephone');
   $perso->email = $request->input('email');
   $perso->status = $request->input('status');
   $perso->save();
   return redirect('/')->with(['success' => "P enregistré"]);
   
}

public function edit($id)
{
   $perso = \App\Personne::find($id);//on recupere la personne
   return view('personne.edit', compact('perso'));
}
public function update(Request $request, $id){
   $perso = \App\Personne::find($id);
   if($perso){
       $perso->nom = $request->input('nom');
       $perso->prenom= $request->input('prenom');
       $perso->adress = $request->input('adress');
       $perso->telephone = $request->input('telephone');
       $perso->email = $request->input('email');
       $perso->status = $request->input('status');
       $perso->save();
   }
   return redirect('/');
}


}





