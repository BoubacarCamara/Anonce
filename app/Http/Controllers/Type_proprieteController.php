<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Type_proprieteController extends Controller
{
  
    public function affiche(){
      $this->authorize('admin');
        $type = \App\Type_de_propriete::orderBy('created_at', 'DESC')->get();
        return view('type_propriete.affiche', compact('type'));
     }
   public function index(){
      $type = \App\Type_de_propriete::orderBy('created_at', 'DESC')->get();
      return view('type_propriete.affiche', compact('type'));
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
   $type = new \App\Type_de_propriete();
   $type->nom = $request->input('nom');
   $type->save();
   return redirect('/type_propriete')->with(['success' => "P enregistré"]);
   
}

public function edit($id)
{
   $this->authorize('admin');
   $type = \App\Type_de_propriete::find($id);//on recupere la typenne
   return view('type_propriete.edit', compact('type'));
}
public function update(Request $request, $id){
   $type = \App\Type_de_propriete::find($id);
   if($type){
       $type->nom = $request->input('nom');
       $type->save();
   }
   return redirect('/');
}

public function destroy($id)
{
   $this->authorize('admin');
   $type = \App\Type_de_propriete::find($id);
   if($type)
       $type->delete();
   return redirect('type_propriete');

}  
}
