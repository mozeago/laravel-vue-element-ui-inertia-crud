<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInpatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inpatients', function (Blueprint $table) {
            $table->foreignId('patient_number')->reference('patient_number')->on('patients')->ondelete('cascade');
            $table->foreignId('room_number')->reference('room_number')->on('rooms')->ondelete('cascade');
            $table->string('admission_date');
            $table->string('discharge_date');
            $table->integer('bed_number')->unique();
            $table->foreignId('lab_number')->reference('lab_number')->on('labs')->ondelete('cascade');
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
        Schema::dropIfExists('inpatients');
    }
}
