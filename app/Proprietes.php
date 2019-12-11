<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proprietes extends Model
{
    public function Demande(){
        return $this->hasMany('App\Demande');
    }

    // public function Alertes(){
    //     return $this->('App\Alertes');
    // }
    public function Type_de_proprietes(){
        return $this->belongsTo("App\Type_de_propriete");
    }
}
