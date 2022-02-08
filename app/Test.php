<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
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
     protected $table = 'tests';
   
    protected $fillable = [
        'id','nombre'
    ];

}
