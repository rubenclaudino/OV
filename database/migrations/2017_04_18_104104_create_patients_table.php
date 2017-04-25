<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('zip_code');
            $table->string('address');
            $table->string('phone_1');
            $table->string('phone_2');
            $table->string('nationality');
            $table->string('education');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->float('height');
            $table->float('weight');
            $table->boolean('wheel_chair');
            $table->boolean('takes_birth_control_pills');
            $table->string('body_type');
            $table->string('previous_surgeries');

            $table->string('indications');
            $table->string('profession');
            $table->string('marital_status');

            $table->integer('referral_id')->unsigned();
            $table->foreign('referral_id')->references('id')->on('referrals')->onDelete('cascade');
            $table->integer('clinic_id')->unsigned();
            $table->foreign('clinic_id')->references('id')->on('clinics')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('patients');
    }
}
