<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_holidays', function (Blueprint $table) {
            $table->increments('id');
            // TODO: convert these to plain old date -> agenda-settings, app holiday controller
            //$table->date('start_date');
            //$table->date('end_date');

            $table->string('start_date');
            $table->string('end_date');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('starttimestamp');
            $table->string('endtimestamp');

            $table->timestamps();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_holidays');
    }
}
