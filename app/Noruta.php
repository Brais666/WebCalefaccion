<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noruta extends Model
{
     protected $fillable = [
    'id','nombre','email','telefono','poblacion'
    ];
}
