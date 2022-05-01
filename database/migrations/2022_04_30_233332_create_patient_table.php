<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->uuid('patient_id')->unique();
            $table->primary('patient_id');
            $table->string('name');
            $table->string('dob');
            $table->string('weight');
            $table->string('gender');
            $table->string('address');
            $table->string('phone_number');
            $table->string('disease');
            $table->uuid('doctor_id');
            $table->foreign('doctor_id')->references('doctor_id')->on('doctors');
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
        Schema::dropIfExists('patient');
    }
}
