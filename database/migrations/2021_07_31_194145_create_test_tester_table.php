<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTesterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_tester', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('test_id');
            $table->foreign('test_id')->references('id')->on('tests');
            $table->unsignedBigInteger('tester_id');
            $table->foreign('tester_id')->references('id')->on('tester_id');
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
        Schema::dropIfExists('test_tester');
    }
}
