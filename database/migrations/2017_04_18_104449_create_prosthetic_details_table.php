<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProstheticDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prosthetic_details', function (Blueprint $table) {

            $table->increments('id');
            $table->string('status');
            $table->boolean('used_before');
            $table->string('reason');
            $table->string('motivation');
            $table->string('pros_type');
            $table->string('responsible');
            $table->string('planing_notes');
            $table->string('initial_photo');
            $table->string('final_photo');
            $table->string('observation');
            $table->float('price');
            $table->string('limits');
            $table->string('material');
            $table->string('cement');
            $table->string('remainder');
            $table->string('region');

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
        Schema::dropIfExists('prosthetic_details');
    }
}
