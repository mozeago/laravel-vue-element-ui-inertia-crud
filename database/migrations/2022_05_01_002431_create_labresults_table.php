<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabresultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_results', function (Blueprint $table) {
            $table->uuid("lab_id")->unique();
            $table->uuid("patient_id");
            $table->uuid("doctor_id");
            $table->primary("lab_id");
            $table->string("weight");
            $table->string("date");
            $table->string("category");
            $table->string("patient_type");
            $table->string("amount");
            $table->foreign("patient_id")->references("patient_id")->on("patients");
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
        Schema::dropIfExists('labresults');
    }
}
