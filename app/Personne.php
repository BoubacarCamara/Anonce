<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    // protected $guarded = [];
    // public function Type_de_proprietes(){
    //     return $this->belongsTo("App\Type_de_propriete");
    // }
    // public function users(){
    //     return $this->belongsTo("App\User");
    // }

    // public function slugGenerator($slug){
    //     $i = 0;
    //     while(!Proprietes::select('slug')->where('slug','like',$slug.'%')->get()->isEmpty()){
    //         ++$i;
    //         $slug = Str::slug($slug, '_').$i;
    //     }
    //     return $slug;
    //  }
    //  public static function boot(){
    //     parent::boot();
    //     static::saving(function($model){
    //     $model->slug = $model->slugGenerator(Str::slug($model->name));
    //     }
}
