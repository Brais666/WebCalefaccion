<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    protected $fillable = [
        'id','idzona', 'poblacion', 'codigopost', 'nombreruta', 'dia'
    ];
}
