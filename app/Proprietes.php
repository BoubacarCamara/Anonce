<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proprietes extends Model
{
    public function Demande(){
        return $this->belongsTo('App\Demande');
    }

    public function Alertes(){
        return $this->belongsTo('App\Alertes');
    }
    public function Type_de_proprietes(){
        return $this->hasMany("App\Type_de_proprietes");
    }
}
