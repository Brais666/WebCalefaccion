<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
   public $timestamps = false;

   protected $fillable = [
        'id','oferta', 'fecha_ini','fecha_fin','tipo','cantidad01','cantidad02','desc_oferta','rango1','rango2','usos','imagen','link'
    ];
}