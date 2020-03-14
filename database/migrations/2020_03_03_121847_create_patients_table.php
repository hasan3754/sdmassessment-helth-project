<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Registration_ID_No');
            $table->string('Date_of_Assessment');
            $table->string('Referral_Source');
            $table->string('Examiner');
            $table->string('Name');
            $table->string('Age');
            $table->string('Gender');
            $table->string('Address');
            $table->string('Occupation_Stress');
            $table->string('Contact_No');
            $table->string('Referral_Diagnosis');
            $table->string('Chief_Compliant');
            $table->string('HPC');
            $table->string('Duration_of_Symptom');
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
        Schema::dropIfExists('patients');
    }
}
