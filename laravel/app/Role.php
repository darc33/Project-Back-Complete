<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //protected $table ='Role';
    protected $fillable = [
        'name', 
    ];

    public function user(){
        return $this->hasMany('App\User');//hasMany

   }
}
