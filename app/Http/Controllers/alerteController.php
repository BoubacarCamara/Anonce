<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alerteController extends Controller
{
    public function affiche(){
        $alert = \App\Alerte::orderBy('created_at', 'DESC')->get();
        return view('alerte.affiche', compact('alert'));
     }
     public function index(){
      $alert = \App\Alerte::orderBy('created_at', 'DESC')->get();
      return view('alerte.affiche', compact('alert'));
   }

   public function create()
{
    $perso = \App\Personne::pluck('id');


   return view('alerte.create',compact('perso'));
}

public function store(Request $request)
{
   
   $data = $request->validate([
      'date'=>'required|min:10',
      'personnes_id'=>'required|max:1',
     
      ]);

   $alert = new \App\Alerte();

   $alert->date = $request->input('date');
   $alert->personnes_id = $request->input('personnes_id');
   $alert->save();
   return redirect('/')->with(['success' => "P enregistré"]);
   
}


//mdifier
public function edit($id)
{
    {
        $alert = \App\Alerte::find($id);
        $perso = \App\Personne::pluck('id');
        return view('alerte.edit', compact('alert','perso'));
     }
     
}

public function update(Request $request, $id){
    $alert = \App\Alerte::find($id);
    // $propriete  = \App\Proprietes::find($id);
    if($alert){
        
        $alert->update
        ([
            "date" => $request->input('date'),
            "personnes_id" => $request->input('personnes_id'),

        ]);
    
    
}
return redirect('/alerte');
 
}
public function destroy($id)
{
   $alert = \App\Alerte::find($id);
   if($alert)
       $alert->delete();
   return redirect('/alerte');

}
}
