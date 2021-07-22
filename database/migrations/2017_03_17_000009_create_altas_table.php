<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAltasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('altas', function (Blueprint $table) {
          $table->increments('id');
          
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');


          $table->integer('n_alta')->unsigned();
          
          $table->integer('motivo_alta_fk')->unsigned();
          $table->foreign('motivo_alta_fk')->references('id')->on('Motivo_alta');

          $table->date('fecha_alta');

          $table->integer('tipo_comprobante_fk')->unsigned();
          $table->foreign('tipo_comprobante_fk')->references('id')->on('Tipo_Comprobante');


          $table->date('fecha_emision');

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
        Schema::drop('altas');
    }
}
