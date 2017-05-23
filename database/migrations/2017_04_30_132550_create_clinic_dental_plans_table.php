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
            $table->string('url')->nullable();
            $table->string('ans_code')->nullable();
            $table->string('additional_info')->nullable();

            $table->string('borough')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('address')->nullable();
            $table->string('street_number')->nullable();
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

            $table->string('phone_landline')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('email')->nullable();

            $table->integer('clinic_id')->unsigned();
            $table->foreign('clinic_id')->references('id')->on('clinics')->onDelete('cascade');

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
