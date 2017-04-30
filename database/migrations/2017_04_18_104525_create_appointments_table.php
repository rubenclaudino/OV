<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            //$table->string('call_type');
            //$table->string('description');
            // TODO: convert to carbon and clean up
            $table->string('starttimestamp');
            $table->string('endtimestamp');
            $table->string('start');
            $table->string('startdate');
            $table->string('end');

            $table->string('className');
            $table->string('observation')->nullable();

            $table->boolean('is_completed');

            //$table->integer('specialty');
            $table->integer('dental_plan')->nullable();

            // TODO: why do we need this
            $table->boolean('allDay');
            $table->boolean('overlap');
            $table->string('category')->nullable();

            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('clinic_id')->unsigned();
            $table->foreign('clinic_id')->references('id')->on('clinics')->onDelete('cascade');
            $table->integer('specialty_id')->unsigned();
            $table->foreign('specialty_id')->references('id')->on('specialties')->onDelete('cascade');

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
        Schema::dropIfExists('appointments');
    }
}
