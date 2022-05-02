<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->uuid('patient_number')->primary();
            $table->foreignId('doctor_number')->reference('doctor_number')->on('doctors')->ondelete('cascade');
            $table->string('patient_name');
            $table->string('age');
            $table->string('weight');
            $table->string('gender');
            $table->string('address');
            $table->string('phone_number');
            $table->string('disease');
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
