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
            $table->string('profile_url');

            $table->string('state');
            $table->string('city');
            $table->string('borough');
            $table->string('zip_code');
            $table->string('address');
            $table->string('street_number');

            $table->string('phone_1');
            $table->string('phone_2')->nullable();
            $table->string('phone_landline')->nullable();
            $table->boolean('uses_whatsapp');
            $table->string('whatsapp_number')->nullable();
            $table->string('nationality');
            $table->date('date_of_birth');
            $table->tinyInteger('gender');

            $table->string('cpf');
            $table->string('rg');
            $table->string('cro');
            $table->string('observation');

            // what are those
            $table->integer('stripe_id');
            $table->string('card_brand');
            $table->string('card_lasts_for');
            $table->string('thai_ends_at');
            //

            $table->string('honors')->nullable();
            $table->float('percentage');
            $table->string('value');
            $table->float('earn_percentage');
            $table->boolean('resident_in_clinic');
            $table->boolean('accept_calls');

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
