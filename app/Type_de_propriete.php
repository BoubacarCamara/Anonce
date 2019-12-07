<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_de_propriete extends Model
{
    public function Proprietes(){
        return $this->belongsTo('App\Proprietes');
    }
}
