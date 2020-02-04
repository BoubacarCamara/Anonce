<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Type_proprieteController extends Controller
{

  
    public function affiche(){
      $this->authorize('admin');
        $typ = \App\Type_de_propriete::orderBy('created_at', 'DESC')->get();
        return view('type_propriete.affiche', compact('typ'));
     }
   public function index(){
      $typ = \App\Type_de_propriete::orderBy('created_at', 'DESC')->get();
      return view('type_propriete.affiche', compact('typ'));
   }
    
    
public function create()
{
   $this->authorize('admin');
   return view('type_propriete.create');
}
    public function store(Request $request)
{
   
   $data = $request->validate([
      'nom'=>'required|min:5',
     ]);
   $typ = new \App\Type_de_propriete();
   $typ->nom = $request->input('nom');
   $typ->save();
   return redirect('/type_propriete')->with(['success' => "P enregistré"]);
   
}

public function edit($id)
{
   $this->authorize('admin');
   $typ = \App\Type_de_propriete::find($id);//on recupere la typenne
   return view('type_propriete.edit', compact('typ'));
}
public function update(Request $request, $id){
   $typ = \App\Type_de_propriete::find($id);
   if($typ){
       $typ->nom = $request->input('nom');
       $typ->save();
   }
   return redirect('/');
}

public function destroy($id)
{
   $this->authorize('admin');
   $typ = \App\Type_de_propriete::find($id);
   if($typ)
       $typ->delete();
   return redirect('type_propriete');

}  
}
