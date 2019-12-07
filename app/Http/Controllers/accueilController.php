<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accueilController extends Controller
{
    public function accueil(){
      $propriete = \App\Proprietes::All();//on a appler la table proprietes dans la variable propriete//
      
      return view('accueil',compact('propriete')); //on a retourner avec compact qui prend la variable sans le $
     }
     
     
}
