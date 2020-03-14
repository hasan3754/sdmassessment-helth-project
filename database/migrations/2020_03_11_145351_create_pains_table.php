<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Thoracic_Spine')->default('null');
            $table->string('Lumber_Spine')->default('null');
            $table->string('Hip')->default('null');
            $table->string('Sij')->default('null');
            $table->string('Knee')->default('null');
            $table->string('Ankle')->default('null');
            $table->string('Cervical_Spine')->default('null');
            $table->string('Shoulder')->default('null');           
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
        Schema::dropIfExists('pains');
    }
}
