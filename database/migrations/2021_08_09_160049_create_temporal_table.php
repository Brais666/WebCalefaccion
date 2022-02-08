<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporal', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('user');
            $table->string('poblacion');
            $table->integer('cantidad');
            $table->string('unidad');
            $table->integer('total');
            $table->timestamp('entrega');
            $table->integer('dentrode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temporal');
    }
}
