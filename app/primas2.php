<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class primas2 extends Model
{
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
     protected $table = 'primas';

    //

      protected $fillable =['ID_Terminal','Fecha','Terminal','Producto','Zona','Platts','Logistica','PrimaDolarTn','Dolar_Euro','ICE','Densidad_Def','Prima_Eur','Total','Prima_+_Platts','Merma_CLH','Total_final','Prima_MENA','Prima_DISA','Prima_Q8','Prima_BURAN'];
}
