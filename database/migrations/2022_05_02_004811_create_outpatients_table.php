<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutpatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outpatients', function (Blueprint $table) {
            $table->foreignId('patient_number')->reference('patient_number')->on('patients')->ondelete('casacade');
            $table->foreignId('lab_number')->reference('lab_number')->on('labs');
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
        Schema::dropIfExists('outpatients');
    }
}
