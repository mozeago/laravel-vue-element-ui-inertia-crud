<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->uuid('doctor_number')->primary();
            $table->foreignId('user_id')->reference('user_id')->on('users')->ondelete('cascade');
            $table->string('specialization');
            $table->string('qualification');
            $table->string('year_of_registration');
            $table->string('registration_number');
            $table->string('registration_authority');
            $table->string('department');
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
        Schema::dropIfExists('doctors');
    }
}
