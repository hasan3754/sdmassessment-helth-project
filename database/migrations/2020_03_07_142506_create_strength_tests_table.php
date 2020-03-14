<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStrengthTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strength_tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Muscles_Groups');
            $table->string('MMT_right_or_left');
            $table->string('Rating');
            $table->biginteger('user_id')->unsigned();
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
        Schema::dropIfExists('strength_tests');
    }
}
