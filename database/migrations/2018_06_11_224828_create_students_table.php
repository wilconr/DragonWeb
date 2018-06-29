<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nick_name')->unique();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('genero');
            $table->date('fecha_nac');
            $table->integer('belt_id')->unsigned();
            $table->string('telefono');
            $table->string('direccion');
            $table->date('fecha_ing');
            $table->integer('peso');
            $table->integer('estatura');
            $table->string('rh');
            $table->text('alergias')->nullable();
            $table->string('seguro_med');
            $table->integer('schedule_id')->unsigned();
            $table->string('avatar');
            $table->timestamps();
            $table->foreign('belt_id')->references('id')->on('belts');
            $table->foreign('schedule_id')->references('id')->on('schedules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
