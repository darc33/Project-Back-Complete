<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeIncident extends Model
{
    //protected $table ='TypeIncident';
    protected $fillable = [
        'name', 'description', 
    ];

    public function incident(){
        return $this->hasMany('App\Incident');//hasMany

   }
}
