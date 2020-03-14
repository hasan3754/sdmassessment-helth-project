<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('standing');
            $table->string('pelvic_tilt');
            $table->string('rib_xipi_sternum');
            $table->string('sitting');
            $table->string('transition');
            $table->string('bed_mobility');
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
        Schema::dropIfExists('postures');
    }
}
