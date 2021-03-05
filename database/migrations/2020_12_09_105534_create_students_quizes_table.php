<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsQuizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_quizes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('result')->nullable();
            $table->string('answered_question')->nullable();
            $table->string('percentage')->default(0);
            $table->string('result_status')->nullable();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('quiz_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('quiz_id')->references('id')->on('quizes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_quizes');
    }
}
