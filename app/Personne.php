<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    public function Demande(){
        return $this->hasMany('App\Demande');
    }
    public function Alertes(){
        return $this->hasMany('App\Alertes');
    }
}
