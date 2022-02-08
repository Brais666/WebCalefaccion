<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporals extends Model
{
    protected $fillable = [
    'id','user','poblacion', 'cantidad', 'preciol', 'entregadia','entregadianum', 'dentrode','email','codigopost','unidad','provincia'
    ];
}
