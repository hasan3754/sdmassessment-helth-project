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
            $table->string('Problem')->default('null');
            $table->string('location')->default('null');
            $table->string('specific_problem')->default('null');
            $table->string('Problem_range')->default('null');
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
