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
            $table->string('Thoracic_Spine');
            $table->string('Lumber_Spine');
            $table->string('Hip');
            $table->string('Sij');
            $table->string('Knee');
            $table->string('Ankle');
            $table->string('Cervical_Spine');
            $table->string('Shoulder');           
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
