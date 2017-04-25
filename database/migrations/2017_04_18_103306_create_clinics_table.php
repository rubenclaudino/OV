<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('owner_name');

            $table->string('borough');
            $table->string('state');
            $table->string('city');
            $table->string('zip_code');
            $table->string('address');
            $table->string('street_number');
            $table->string('phone_1');
            $table->string('phone_2');
            $table->string('fax');
            $table->string('email');
            $table->string('website');

            $table->string('type');
            $table->string('status');
            $table->string('logo');

            $table->integer('subscription_id')->unsigned()->nullable();
            $table->foreign('subscription_id')->references('id')->on('subscriptions')->onDelete('cascade');

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
        Schema::dropIfExists('clinics');
    }
}
