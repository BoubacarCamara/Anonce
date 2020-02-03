<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_anonce extends Model
{
     public function Proprietes(){
        return $this->hasMany('App\Proprietes','Type_anonce_id','id');
    }
}
