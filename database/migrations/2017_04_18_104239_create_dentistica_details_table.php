<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDentisticaDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dentistica_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->string('reason');
            $table->string('motivation');
            $table->string('limit');
            $table->string('type');
            $table->string('region');
            $table->string('plan');
            $table->string('initial_photo');
            $table->string('final_photo');
            $table->timestamps();

            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dentistica_details');
    }
}
