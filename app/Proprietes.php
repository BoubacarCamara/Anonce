<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proprietes extends Model
{
    protected $guarded = [];
    public function Type_de_proprietes(){
        return $this->belongsTo("App\Type_de_propriete");
    }
    public function User(){
        return $this->belongsTo("App\User");
    }

    public static function boot(){
        parent::boot();
        static::saving(function($model){
            $model->slug = \Illuminate\Support\Str::slug($model->name);
        });
     }
     
}
