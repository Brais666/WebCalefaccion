<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = [
        'codigocliente','nombre','email', 'dni', 'address', 'poblacion', 'provincia', 'CP', 'fechaentrada', 'canal', 'estado', 'producto', 'cantidad', 'total', 'seleccionado','session_token','codigopost', 'financiado', 'cuotas', 'totalfinan', 'meses','telefono','observaciones','preciol','diashasta', 'estimatedDeliveryDate'
    ];
}
