<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poblacion extends Model
{
     protected $fillable = [
        'nombre', 'fechaentrada', 'cantidad', 'unidad'
    ];
}
