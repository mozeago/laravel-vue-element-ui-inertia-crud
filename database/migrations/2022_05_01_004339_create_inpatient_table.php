<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInpatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inpatients', function (Blueprint $table) {
            $table->uuid("inpatient_id")->unique();
            $table->primary("inpatient_id");
            $table->string("room_id");
            $table->string("date_of_admission");
            $table->string("date_of_discharge");
            $table->string("advance_payment");
            $table->string("lab_id");
            $table->foreign("lab_id")->references("lab_id")->on("lab_results");
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
        Schema::dropIfExists('inpatient');
    }
}
