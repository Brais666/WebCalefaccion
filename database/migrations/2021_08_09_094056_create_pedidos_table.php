<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->integer('codigocliente');
            $table->string('nombre');
            $table->string('dni');
            $table->string('address');
            $table->string('poblacion');
            $table->string('provincia');
            $table->integer('CP');
            $table->timestamp('fechaentrada');
            $table->string('canal');
            $table->string('estado');
            $table->string('producto');
            $table->decimal('cantidad');
            $table->decimal('total');
            $table->char('seleccionado');
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
        Schema::dropIfExists('pedidos');
    }
}
