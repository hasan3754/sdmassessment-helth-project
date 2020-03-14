<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreateesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('createes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Problem');
            $table->string('location');
            $table->string('specific_problem');
            $table->string('Problem_range');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('patients');
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
        Schema::dropIfExists('createes');
    }
}
