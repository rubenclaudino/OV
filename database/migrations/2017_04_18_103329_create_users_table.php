<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nationality');
            $table->date('date_of_birth');
            $table->tinyInteger('gender');
            $table->string('profile_picture')->nullable();

            $table->string('borough');
            $table->string('zip_code');
            $table->string('address');
            $table->string('street_number');

            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('phone_landline')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->boolean('is_phone_1_public')->nullable();
            $table->boolean('is_phone_2_public')->nullable();
            $table->boolean('is_phone_landline_public')->nullable();
            $table->boolean('is_whatsapp_number_public')->nullable();

            $table->string('personal_id_number')->unique();
            // addition to personal ID number for Brazil
            $table->string('cpf');

            $table->string('dentist_unique_identifier')->unique();
            $table->string('additional_info')->nullable();

            // for stripe payment integration
            $table->integer('stripe_id')->nullable();
            $table->string('card_brand')->nullable();
            $table->string('card_lasts_for')->nullable();

            $table->float('earn_percentage')->nullable();
            $table->boolean('resident_in_clinic')->nullable();
            $table->boolean('accepts_after_hour_calls')->nullable();
            $table->float('salary');

            $table->rememberToken();
            $table->timestamps();

            $table->integer('clinic_id')->unsigned();
            $table->foreign('clinic_id')->references('id')->on('clinics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
