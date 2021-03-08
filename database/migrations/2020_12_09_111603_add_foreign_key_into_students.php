<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyIntoStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
          $table->unsignedBigInteger('user_id')->nullable();
          // $table->unsignedBigInteger('student_lesson_id')->nullable();
          // $table->unsignedBigInteger('student_quiz_id')->nullable();
          // $table->unsignedBigInteger('student_game_id')->nullable();
          // $table->unsignedBigInteger('leaderboard_id')->nullable();
          // $table->unsignedBigInteger('message_id')->nullable();

          $table->foreign('user_id')->references('id')->on('users');
          // $table->foreign('student_lesson_id')->references('id')->on('students_lessons');
          // $table->foreign('student_quiz_id')->references('id')->on('students_quizes');
          // $table->foreign('student_game_id')->references('id')->on('students_games');
          // $table->foreign('leaderboard_id')->references('id')->on('leaderboards');
          // $table->foreign('message_id')->references('id')->on('messages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
          $table->dropColumn('user_id');
          $table->dropColumn('student_lesson_id');
          $table->dropColumn('student_quiz_id');
          $table->dropColumn('student_game_id');
          $table->dropColumn('leaderboard_id');
          $table->dropColumn('message_id');
        });
    }
}
