<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLugaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugares', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('lugar_fk')->unsigned();
            $table->foreign('lugar_fk')->references('id')->on('lugares');

            $table->integer('responsable_fk')->unsigned();
            $table->foreign('responsable_fk')->references('id')->on('responsables');

            $table->string('nombre')->unique();
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lugares');
    }
}
