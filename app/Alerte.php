<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerte extends Model
{
    
    public function Personnes(){
        return $this->belongsTo("App\Personnes");
    }
    // public function Proprietes(){
    //     return $this->hasMany("App\Proprietes");
    // }
}
