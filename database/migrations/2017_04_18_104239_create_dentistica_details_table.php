<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDentisticaDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dentistica_details', function (Blueprint $table) {

            $table->string('status', 50)->nulable();
            $table->string('used_before', 50)->nulable();
            $table->string('reason', 50)->nulable();
            $table->string('motivation', 50)->nulable();
            $table->string('type', 50)->nulable();
            $table->string('responsible', 50)->nulable();
            $table->string('planing_notes')->nullable();
            $table->string('initial_image')->nullable();
            $table->string('final_image')->nullable();
            $table->string('observation');
            $table->float('price');

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
        Schema::dropIfExists('dentistica_details');
    }
}
