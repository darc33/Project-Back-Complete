<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
	//protected $table ='Incident';
    protected $fillable = [
        'name', 'description', 'coordinate', 'status', 'initial_datetime', 'final_datetime',
    ];
}
