<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotCategDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_categoria_detalle', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('categoria_fk')->unsigned();
            $table->foreign('categoria_fk')->references('id')->on('categorias');
            
            $table->integer('detalle_fk')->unsigned();
            $table->foreign('detalle_fk')->references('id')->on('detalles');


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
        Schema::dropIfExists('pivot_categoria_detalle');
    }
}
