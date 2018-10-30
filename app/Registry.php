<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registry extends Model
{
	//protected $table ='Registry';
    protected $fillable = [
        'type', 'initial_direction', 'final_direction', 'no_consultas', 'linestring',
    ];
}
