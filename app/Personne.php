<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    public function Demande(){
        return $this->belongsTo('App\Demande');
    }
    public function Alertes(){
        return $this->belongsTo('App\Alertes');
    }
}
