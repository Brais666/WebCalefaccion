<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarifas extends Model
{
    protected $fillable = [
        'id','producto', 'fecha_modificacion', 'rango1', 'rango2', 'precio' , 'zonadesc' , 'idzona' , 'updated_at' , 'created_at','zona'
    ];
}
