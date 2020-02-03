<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Type_anonceController extends Controller
{
    //
    public function affiche(){
        //$this->authorize('admin');
          $anonce = \App\Type_anonce::orderBy('created_at', 'DESC')->get();
          return view('type.affiche', compact('anonce'));
       }
     public function index(){
        $anonce = \App\Type_anonce::orderBy('created_at', 'ASC')->get();
        return view('type.affiche', compact('anonce'));
     }
      
      
  public function create()
  {
     //$this->authorize('admin');
     return view('type.create');
  }
      public function store(Request $request)
  {
     
     $data = $request->validate([
        'type'=>'required|min:5',
       ]);
     $anonce = new \App\Type_anonce();
     $anonce->type = $request->input('type');
     $anonce->save();
     return redirect('/type')->with(['success' => "P enregistré"]);
     
  }
  
  public function edit($id)
  {
     //$this->authorize('admin');
     $anonce = \App\Type_anonce::find($id);//on recupere la type
     return view('type.edit', compact('anonce'));
  }
  public function update(Request $request, $id){
     $anonce = \App\Type_anonce::find($id);
     if($anonce){
         $anonce->type = $request->input('type');
         $anonce->save();
     }
     return redirect('/');
  }
  
  public function destroy($id)
  {
     $this->authorize('admin');
     $anonce = \App\Type_anonce::find($id);
     if($anonce)
         $anonce->delete();
     return redirect('type');
  
  }  
}
