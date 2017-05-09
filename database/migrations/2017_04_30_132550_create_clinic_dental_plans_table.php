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
            $table->string('ans_code')->nulable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('borough')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('address')->nullable();
            $table->string('street_number')->nullable();
            $table->string('obs')->nullable();

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
