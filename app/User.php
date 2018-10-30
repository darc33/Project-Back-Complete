<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $table ='User';
    protected $fillable = [
        'name', 'email', 'password', 'role', 'lastname', 'phone', 'gender', 'entity', 'cedula',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');//hasMany

   }

   public function incident(){
        return $this->hasMany('App\Incident');//hasMany

   }

   public function registry(){
        return $this->hasMany('App\Registry');//hasMany

   }
}
