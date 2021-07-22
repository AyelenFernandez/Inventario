<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('items', function (Blueprint $table) {
          $table->increments('id');
          
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
          
          $table->integer('item_contenedor_fk')->unsigned();
          $table->foreign('item_contenedor_fk')->references('id')->on('items');
          
          $table->integer('lugar_asignado_fk')->unsigned();
          $table->foreign('lugar_asignado_fk')->references('id')->on('lugares');
          
          $table->integer('estado_fk')->unsigned();
          $table->foreign('estado_fk')->references('id')->on('estados');

          $table->integer('categoria_fk')->unsigned();
          $table->foreign('categoria_fk')->references('id')->on('categorias');          
          
          $table->integer('alta_fk')->unsigned();
          $table->foreign('alta_fk')->references('id')->on('altas');
          
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
        //
        Schema::drop('items');
    }
}
