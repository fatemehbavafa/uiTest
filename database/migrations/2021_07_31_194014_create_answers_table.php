<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('test_id');
            $table->foreign('test_id')->references('id')->on('tests');
            $table->unsignedBigInteger('tester_id');
            $table->foreign('tester_id')->references('id')->on('users');
            $table->unsignedBigInteger('question_id')->nullable();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->text('answer')->nullable();
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
        Schema::dropIfExists('answers');
    }
}
