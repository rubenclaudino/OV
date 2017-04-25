<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrthodonticDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orthodontic_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->boolean('used_before');
            $table->string('reason');
            $table->string('motivation');
            $table->string('initial_photo');
            $table->string('final_photo');
            $table->string('brace_type');
            $table->float('price');

            $table->timestamps();

            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orthodontic_details');
    }
}
