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
            $table->string('standing')->default('null');
            $table->string('pelvic_tilt')->default('null');
            $table->string('rib_xipi_sternum')->default('null');
            $table->string('sitting')->default('null');
            $table->string('transition')->default('null');
            $table->string('bed_mobility')->default('null');
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
