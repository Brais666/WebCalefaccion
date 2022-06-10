<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    //
    /**
     * The database connection used by the model.
     *
     * @var string
     */
     protected $connection = 'comments';

      /**
     * The database table used by the model.
     *
     * @var string
     */
     protected $table = 'dbo.SGT_GD_CLIENTS';

    protected $fillable =['id','codigo','empresa','nombre','cif','vp','direccion','poblacion','cp','provincia','pais','telefono1','telefono2','telefono3','email','upfecha'];
}