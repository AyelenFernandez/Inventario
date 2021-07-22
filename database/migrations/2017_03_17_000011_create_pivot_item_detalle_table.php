<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotItemDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_item_detalle', function (Blueprint $table) {
            $table->increments('id');

            $table->string('valor');

            $table->integer('item_fk')->unsigned();
            $table->foreign('item_fk')->references('id')->on('items');
            
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
        Schema::dropIfExists('pivot_item_detalle');
    }
}
