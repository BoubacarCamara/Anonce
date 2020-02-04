<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Proprietes;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;




use Illuminate\Support\Facades\Storage;

class ProprieteController extends Controller
{
    public function affiche(){
        
        $perso = \App\Proprietes::orderBy('created_at', 'ASC')->get();
        return view('propriete.affiche', compact('perso'));
     }
     public function index(){
      $perso = \App\Proprietes::orderBy('created_at', 'ASC')->get();
      return view('propriete.affiche', compact('perso'));
   }
      
    
public function create()
{
    $Type_de_propriete = \App\Type_de_propriete::pluck('nom','id');
    $anonce = \App\Type_anonce::pluck('typ','id');
    $user = \App\User::pluck('email','id');

   return view('propriete.create',compact('Type_de_propriete','user','anonce'));
}
    public function store(Request $request)
{
   
   $data = $request->validate([
      'localisation'=>'required|min:2',
      'prix_min'=>'required|max:1000',
      'prix_max'=>'max:1000000',
      'nombre_chambre_min'=>'max:1'
      ,'nombre_chambre_max'=>'max:30',
      'salle_de_bain'=>'max:20',
      'superficie'=>'max:2000',
      'Type_anonce_id'=>'max:20',
      'description'=>'max:20000',
      'Type_de_proprietes_id'=>'max:200',
      'users_id'=>'max:50',

      "image" => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048'

      ]);
   
   $propriete = new \App\Proprietes();
   if($request->has('image')){
    $image = $request->file('image');
    //dd($image);
    $image_name = \Illuminate\Support\Str::slug($request->input('name')).'_'.time();
    $folder = '/public/uploads/images/';
    $propriete->image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
    $this->uploadImage($image, $folder, 'public', $image_name);
}
   //dd($request->input('Type_de_proprietes_id'));
   $propriete->localisation = $request->input('localisation');
   $propriete->prix_min = $request->input('prix_min');
   $propriete->prix_max = $request->input('prix_max');
   $propriete->nombre_chambre_min = $request->input('nombre_chambre_min');
   $propriete->nombre_chambre_max = $request->input('nombre_chambre_max');
   $propriete->salle_de_bain = $request->input('salle_de_bain');
   $propriete->superficie = $request->input('superficie');
   $propriete->description = $request->input('description');
   $propriete->Type_anonce_id = $request->input('Type_anonces_id');
   $propriete->Type_de_proprietes_id = $request->input('Type_de_proprietes_id');
   //$propriete->image = $request->input('image');
   $propriete->users_id= $request->input('users_id');
   $propriete->users_id  = Auth::id();
   $propriete->save();
   return redirect('/')->with(['success' => "Propriete enregistré"]);
}
public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
    $name = !is_null($filename) ? $filename : str_random('25');
    $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
    
    return $file;
 }
 


public function edit($id)
{
    { 
       
        $propriete = \App\Proprietes::find($id);
        $user = \App\User::pluck('id');
        $Type_de_propriete = \App\Type_de_propriete::pluck('nom','id');
        $anonce = \App\Type_anonce::pluck('typ','id');
        return view('propriete.edit', compact('propriete','Type_de_propriete','user','anonce'));
     }
     
}

public function update(Request $request, $id){
    $propriete = \App\Proprietes::find($id);
    // $propriete  = \App\Proprietes::find($id);
    if($propriete){
        $save_image = null;
        if($request->has('image')){
            //On enregistre l'image dans une variable
            $image = $request->file('image');

            if(file_exists(public_path().$propriete->image)){//On verifie si le fichier existe
                Storage::delete(asset($propriete->image));//On le supprime alors
            }
            //Nous enregistrerons nos fichiers dans /uploads/images dans public
            $folder = '/public/uploads/images/';
            $image_name = Str::slug($request->input('name')).'_'.time();
            $save_image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
            $this->uploadImage($image, $folder, 'public', $image_name);
        }
        $propriete->update([
            "localisation" => $request->input('localisation'),
            "prix_min" => $request->input('prix_min'),
            "prix_max" => $request->input('prix_max'),
            "image" => $save_image,
            "nombre_chambre_min" => $request->input('nombre_chambre_min'),
            "nombre_chambre_max" => $request->input('nombre_chambre_max'),
            "salle_de_bain" => $request->input('salle_de_bain'),
            "superficie" => $request->input('superficie'),
            "description" => $request->input('description'),
            "Type_anonce_id" => $request->input('Type_anonce_id'),
            //"users_id" => $request->input('users_id'),
            "Type_de_proprietes_id" => $request->input('Type_de_proprietes_id'),
        ]);
    }
    return redirect('/propriete');
}
    
public function destroy($id)
{
    $this->authorize('admin');
   $propriete = \App\Proprietes::find($id);
   if($propriete)
       $propriete->delete();
   return redirect('/propriete');

}

//
public function search (){
    $propriete = App\Proprietes::search('Star Trek')->get();
   return view('propriete.recherche', compact('propriete'));

}
///methode show

   public function show($id){
    $propriete = Proprietes::find($id);
    return view("propriete.show", compact('propriete'));
 }
 
 public function recherche(Request $request){
     $id=$request->input('Type_de_proprietes_id');
     $id3=$request->input('Type_de_proprietes_id');
     $id1=$request->input('Type_anonce_id');
     $id4=$request->input('Type_anonce_id');
     $id2=$request->input('localisation');

     $propriete = Proprietes::where('Type_de_proprietes_id', '=',$id)
     ->where('Type_anonce_id', '=',$id1)->get();
     $propriete = Proprietes::where('Type_de_proprietes_id', '=',$id3)->get();
     $propriete = Proprietes::where('Type_anonce_id', '=',$id4)->get();
     //$propriete = Proprietes::where('id','=',$id2)->get();
          

 
     
    
//dd($propriete);
    //  $propriete = Proprietes::and('type_anonce', "=",'type_propriete')->get();
     //$articles = Articles::orderBy('date', 'desc')->get();
     return view('propriete.pro_show', compact('propriete'));

 }
}//fin de la classe











