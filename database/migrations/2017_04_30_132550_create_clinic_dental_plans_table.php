<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicDentalPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_dental_plans', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title');

            $table->string('url')->nulable();
            $table->string('phone_1')->nulable();
            $table->string('phone_2')->nulable();
            $table->string('address')->nulable();
            $table->string('street_number')->nulable();
            $table->string('borough')->nulable();

            $table->string('ans_code')->nulable();
            $table->string('cep')->nulable();

            $table->string('obs')->nullable();

            $table->integer('clinic_id')->unsigned();
            $table->foreign('clinic_id')->references('id')->on('clinics')->onDelete('cascade');
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
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
        Schema::dropIfExists('clinic_dental_plans');
    }
}
