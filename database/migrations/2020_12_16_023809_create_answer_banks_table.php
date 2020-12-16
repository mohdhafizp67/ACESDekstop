<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_banks', function (Blueprint $table) {
            $table->id();
            $table->string('answer');
            $table->string('status');
            $table->bigInteger('question_id')->unsigned()->nullable();
            $table->foreign('question_id')->references('id')->on('question_banks');
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
        Schema::dropIfExists('answer_banks');
    }
}