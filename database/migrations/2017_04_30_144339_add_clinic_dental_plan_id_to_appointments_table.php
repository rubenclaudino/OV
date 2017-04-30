<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClinicDentalPlanIdToAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->integer('clinic_dental_plan_id')->unsigned()->nullable();
            $table->foreign('clinic_dental_plan_id')->references('id')->on('clinic_dental_plans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropForeign('appointments_clinic_dental_plan_id_foreign');
            $table->dropColumn('clinic_dental_plan_id');
        });
    }
}
