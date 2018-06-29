<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendantStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendant_student', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('attendant_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->timestamps();
            $table->foreign('attendant_id')->references('id')->on('attendants');
            $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendant_student');
    }
}
