<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable implements MustVerifyEmail
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status','telephone','name','prenom', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function Proprietes(){
        return $this->hasMany('App\Proprietes');
    }

    /**Cette méthode va determiner si le user connecté a un  admin*/
    public function isAdmin(){
    return strtolower(@$this->status) === 'admin'? true : false;
   }
   /**Cett méthode va determiner si le user connecté a un statut agen*/
public function isModerator(){
    return strtolower(@$this->status) === 'agent'? true : false;
 }
 
 
}
