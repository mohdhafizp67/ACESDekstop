<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_games', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('student_point')->default(0);
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('game_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('game_id')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_games');
    }
}
