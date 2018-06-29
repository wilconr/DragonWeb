<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nick_name')->unique();
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fecha_nac');
            $table->integer('belt_id')->unsigned();
            $table->string('avatar');
            $table->timestamps(); 
            $table->foreign('belt_id')->references('id')->on('belts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maestros');
    }
}
