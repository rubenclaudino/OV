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
            $table->string('treatment_status', 50)->nulable();
            $table->string('anterior_ortho_treatment', 50)->nulable();
            $table->string('reason_for_treatment', 50)->nulable();
            $table->string('motivation_level', 50)->nulable();
            $table->string('brace_type', 50)->nulable();
            $table->string('responsible', 50)->nulable();
            $table->string('initial_image');
            $table->string('final_image');
            $table->string('planing_note');

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
