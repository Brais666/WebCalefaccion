<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'codigocliente','nombre', 'dni', 'address', 'poblacion', 'provincia', 'CP', 'fechaentrada', 'canal', 'estado', 'producto', 'cantidad', 'total', 'seleccionado'
    ];
}
