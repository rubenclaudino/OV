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
            $table->string('url');
            $table->string('phone_1');
            $table->string('phone_2');
            $table->string('address');
            $table->string('street_number');
            $table->string('borough');

            $table->string('ans_code');
            $table->string('cep');

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
