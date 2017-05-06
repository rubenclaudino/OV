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

            // Personal Info
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 100)->nullable();
            $table->string('patient_profile_image')->nullable();
            $table->string('nationality')->nullable();
            $table->string('education')->nullable();
            $table->boolean('confirmation_request')->nullable();
            $table->string('CPF', 50)->nullable();
            $table->string('RG', 50)->nullable();
            $table->string('vip', 50)->nullable();
            $table->string('observation', 100)->nullable();
            $table->string('profession')->nullable();
            $table->string('speciality')->nullable();
            $table->string('marital_status', 20)->nullable();

            // Address
            $table->string('borough', 60)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('city', 60)->nullable();
            $table->string('zip_code', 10)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('street_number', 10)->nullable();
            $table->string('address_obs', 50)->nullable();
            $table->integer('state_id')->nullable();

            // Contact
            $table->string('phone_landline', 16)->nullable();
            $table->string('phone_1', 16)->nullable();
            $table->string('phone_2', 16)->nullable();
            $table->string('work_phone', 16)->nullable();
            $table->string('whatsapp_number', 16)->nullable();
            $table->string('related_name_1', 50)->nullable();
            $table->string('related_phone_1', 16)->nullable();
            $table->string('related_name_2', 50)->nullable();
            $table->string('related_phone_2', 16)->nullable();

            // TODO: to carbon
            $table->string('date_of_birth')->nullable();
            $table->tinyInteger('gender')->nullable();

            // TODO: move to related
            // Dental Plan
            $table->boolean('has_dental_plan')->nullable();
            $table->string('card_number', 30)->nullable();
            $table->string('card_owner', 30)->nullable();
            $table->string('dental_plan_type', 30)->nullable();
            $table->string('exp_date')->nullable();
            $table->string('accepted_DP1', 30)->nullable();
            $table->string('DP_acd1', 30)->nullable();

            // TODO: what are those

            $table->string('upload_exams', 50)->nullable();

            // TODO: for removal
            $table->boolean('hasProsSpec')->nullable();
            $table->boolean('hasOrtoSpec')->nullable();

            // Health
            $table->boolean('take_preg_pills')->nullable();
            $table->boolean('has_prev_surgeries')->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->boolean('wheel_chair')->nullable();
            $table->boolean('takes_birth_control_pills')->nullable();
            $table->boolean('had_previous_surgeries')->nullable();
            $table->boolean('takes_drugs')->nullable();
            $table->boolean('has_birth_defect')->nullable();
            $table->tinyInteger('current_health')->nullable();
            $table->string('diseases', 50)->nullable();

            $table->string('typeOfPlan1', 30)->nullable();
            $table->string('typeOfPlan2', 30)->nullable();

            $table->integer('referral_id')->unsigned()->nullable();
            $table->foreign('referral_id')->references('id')->on('referrals')->onDelete('cascade');
            $table->integer('clinic_id')->unsigned();
            $table->foreign('clinic_id')->references('id')->on('clinics')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->nullable();
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
