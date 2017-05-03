<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientDentalPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_dental_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('card_number', 30)->nulable();
            $table->string('card_owner', 30)->nullable();
            $table->string('dental_plan_type', 30)->nullable();
            $table->string('exp_date');

            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->integer('clinic_dental_plan_id')->unsigned();
            $table->foreign('clinic_dental_plan_id')->references('id')->on('clinic_dental_plans')->onDelete('cascade');
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
        Schema::dropIfExists('patient_dental_plans');
    }
}
