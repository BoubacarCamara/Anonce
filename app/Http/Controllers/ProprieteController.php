<?php
namespace App\Http\Controllers;


use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProprieteController extends Controller
{
    public function affiche(){
        $perso = \App\Proprietes::orderBy('created_at', 'DESC')->get();
        return view('propriete.affiche', compact('perso'));
     }
     public function index(){
      $perso = \App\Proprietes::orderBy('created_at', 'DESC')->get();
      return view('propriete.affiche', compact('perso'));
   }
      
    
public function create()
{
    $Type_de_propriete = \App\Type_de_propriete::pluck('nom','id');

   return view('propriete.create',compact('Type_de_propriete'));
}
    public function store(Request $request)
{
   
   $data = $request->validate([
      'localisation'=>'required|min:2',
      'prix_min'=>'required|max:10000',
      'prix_max'=>'max:1000000',
      'nombre_chambre_min'=>'max:1'
      ,'nombre_chambre_max'=>'max:30',
      'salle_de_bain'=>'max:20',
      'superficie'=>'max:200000',
      'type_anonce'=>'max:20',
      'description'=>'max:20000',
      'Type_de_proprietes_id'=>'max:2000',
      "image" => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048'

      ]);

   $perso = new \App\Proprietes();
   if($request->has('image')){
    $image = $request->file('image');
    //dd($image);
    $image_name = \Illuminate\Support\Str::slug($request->input('name')).'_'.time();
    $folder = '/uploads/images/';
    $perso->image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
    $this->uploadImage($image, $folder, 'public', $image_name);
}
   //dd($request->input('Type_de_proprietes_id'));
   $perso->localisation = $request->input('localisation');
   $perso->prix_min = $request->input('prix_min');
   $perso->prix_max = $request->input('prix_max');
   $perso->nombre_chambre_min = $request->input('nombre_chambre_min');
   $perso->nombre_chambre_max = $request->input('nombre_chambre_max');
   $perso->salle_de_bain = $request->input('salle_de_bain');
   $perso->superficie = $request->input('superficie');
   $perso->description = $request->input('description');
   $perso->type_anonce = $request->input('type_anonce');
   $perso->Type_de_proprietes_id = $request->input('Type_de_proprietes_id');
   $perso->save();
   return redirect('/')->with(['success' => "P enregistré"]);
   
}
public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
    $name = !is_null($filename) ? $filename : str_random('25');
    $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
    return $file;
 }
 


public function edit($id)
{
   $perso = \App\Proprietes::find($id);//on recupere la propriete
   return view('propriete.edit', compact('perso'));
}
public function update(Request $request, $id){
   $perso = \App\Proprietes::find($id);
   if($perso){
      if($request->has('image')){
          //On enregistre l'image dans une variable
          $image = $request->file('image');
          if(file_exists(public_path().$perso->image))//On verifie si le fichier existe
              Storage::delete(asset($perso->image));//On le supprime alors
          //Nous enregistrerons nos fichiers dans /uploads/images dans public
          $folder = '/uploads/images/';
          $image_name = Str::slug($request->input('name')).'_'.time();
          $perso->image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
          //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
          $this->uploadImage($image, $folder, 'public', $image);
    
    $perso->localisation = $request->input('localisation');
   $perso->prix_min = $request->input('prix_min');
   $perso->prix_max = $request->input('prix_max');
   $perso->nombre_chambre_min = $request->input('nombre_chambre_min');
   $perso->nombre_chambre_max = $request->input('nombre_chambre_max');
   $perso->salle_de_bain = $request->input('salle_de_bain');
   $perso->superficie = $request->input('superficie');
   $perso->description = $request->input('description');
   $perso->type_anonce = $request->input('type_anonce');
   $perso->Type_de_proprietes_id = $request->input('Type_de_proprietes_id');
   $perso->save();

}
   return redirect('/propriete');
}
}

public function destroy($id)
{
   $perso = \App\Proprietes::find($id);
   if($perso)
       $perso->delete();
   return redirect()->back();

}
}






