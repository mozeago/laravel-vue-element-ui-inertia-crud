<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labs', function (Blueprint $table) {
            $table->uuid('lab_number')->primary();
            $table->foreignId('patient_id')->reference('patient_number')->on('patients');
            $table->foreignId('doctor_id')->reference('doctor_number')->on('doctors');
            $table->enum('patient_type', ['inpatient', 'outpatient'])->default('outpatient');
            $table->string('weight');
            $table->string('height');
            $table->string('temperature');
            $table->string('blood_pressure');
            $table->string('pulse_rate');
            $table->double('lab_fee')->nullable();
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
        Schema::dropIfExists('labs');
    }
}
