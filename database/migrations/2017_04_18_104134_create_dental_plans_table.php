<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDentalPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dental_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->integer('dental_plan_type_id')->unsigned();
            $table->foreign('dental_plan_type_id')->references('id')->on('dental_plan_types')->onDelete('cascade');
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            
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
        Schema::dropIfExists('dental_plans');
    }
}
