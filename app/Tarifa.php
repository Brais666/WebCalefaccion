<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
      protected $fillable = [
        'id','producto', 'fecha_modificacion', 'rango1', 'rango2', 'precio' , 'zona' , 'idzona' , 'updated_at' , 'created_at','zonadesc'
    ];
}
