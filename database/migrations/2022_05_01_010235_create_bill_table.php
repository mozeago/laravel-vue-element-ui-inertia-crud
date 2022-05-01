<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->uuid("bill_number")->unique();
            $table->primary("bill_number");
            $table->uuid("patient_id");
            $table->string("patient_type");
            $table->string("doctor_charge");
            $table->string("lab_charge");
            $table->string("room_charge");
            $table->string("medicine_charge");
            $table->string("number_of_days");
            $table->string("nursing_charge");
            $table->string("health_card");
            $table->string("advance");
            $table->string("oprtn_charge");
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
        Schema::dropIfExists('bill');
    }
}
