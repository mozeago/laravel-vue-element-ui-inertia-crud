<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutpatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outpatient', function (Blueprint $table) {
            $table->uuid("outpatient_id")->unique();
            $table->primary("outpatient_id");
            $table->string("admission_date")->timestamp();
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
        Schema::dropIfExists('outpatient');
    }
}
