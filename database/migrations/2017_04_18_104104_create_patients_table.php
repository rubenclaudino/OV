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
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 100)->nullable();
            $table->string('patient_profile_image')->nullable();

            $table->string('country', 50)->nullable();
            $table->string('borough', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('zip_code', 10)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('street_number')->nullable();

            $table->string('phone_landline', 20)->nullable();
            $table->string('phone_1', 20)->nullable();
            $table->string('phone_2', 20)->nullable();
            $table->string('work_phone', 20)->nullable();
            $table->string('whatsapp_number', 20)->nullable();
            $table->string('related_name_1', 20)->nullable();
            $table->string('related_phone_1', 20)->nullable();
            $table->string('related_name_2', 20)->nullable();
            $table->string('related_phone_2', 20)->nullable();

            $table->string('nationality')->nullable();
            $table->string('education')->nullable();
            // TODO: to carbon
            $table->string('date_of_birth')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('marital_status', 20)->nullable();

            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->boolean('wheel_chair')->nullable();
            $table->boolean('takes_birth_control_pills')->nullable();
            $table->boolean('had_previous_surgeries')->nullable();
            $table->boolean('takes_drugs')->nullable();
            $table->boolean('has_birth_defect')->nullable();
            $table->tinyInteger('current_health')->nullable();

            // TODO: can remove after sucessful relationship implementation
            $table->string('accepted_DP1', 30)->nullable();
            $table->string('accepted_DP2', 30)->nullable();
            $table->string('accepted_DP3', 30)->nullable();
            $table->string('cardNo2', 30)->nullable();
            $table->string('cardNo3', 30)->nullable();
            $table->string('typeOfPlan3', 30)->nullable();
            $table->string('cardExpDate2', 20)->nullable();
            $table->string('cardExpDate3', 30)->nullable();
            $table->string('DP_acd1', 30)->nullable();
            $table->string('DP_acd2', 30)->nullable();
            $table->string('DP_acd3', 30)->nullable();
            $table->string('diseases', 50)->nullable();

            // TODO: move to related
            // dental plan
            $table->string('card_number', 30)->nullable();
            $table->string('card_owner', 30)->nullable();
            $table->string('dental_plan_type', 30)->nullable();
            $table->string('ans_code')->nullable();
            // orthodontic
            $table->string('treatment_status', 50)->nullable();
            $table->string('anterior_ortho_treatment', 50)->nullable();
            $table->string('reason_for_treatment', 50)->nullable();
            $table->string('motivation_level', 50)->nullable();
            $table->string('brace_type', 50)->nullable();
            $table->string('responsible', 50)->nullable();
            $table->string('initial_image')->nullable();
            $table->string('final_image')->nullable();
            $table->string('planning_note')->nullable();
            $table->string('planing_note')->nullable();
            $table->string('orto_motivation_level')->nullable();
            $table->string('orto_initial_image')->nullable();
            // prosthetic
            $table->string('pros_treatment_status', 50)->nullable();
            $table->string('pro_responsible', 50)->nullable();
            $table->string('has_pros_before', 50)->nullable();
            $table->string('pro_reason_for_treatment', 50)->nullable();
            $table->string('pros_limit', 50)->nullable();
            $table->string('pros_type_cement', 50)->nullable();
            $table->string('pros_type_rem', 50)->nullable();
            $table->string('pros_type_pros', 50)->nullable();
            $table->string('pros_implant_reg', 50)->nullable();
            $table->string('pros_material', 50)->nullable();
            $table->string('patient_pro_init', 50)->nullable();
            $table->string('patient_pros_init_img', 50)->nullable();

            // TODO: what are those
            $table->string('pros_observation', 50)->nullable();
            $table->string('upload_exams', 50)->nullable();
            $table->string('patient_orto_init', 50)->nullable();
            $table->string('ortho_planing_note', 50)->nullable();
            $table->string('save', 10)->nullable();


            // TODO: for removal
            $table->boolean('has_dental_plan')->nullable();
            $table->boolean('hasDentalPlan2')->nullable();
            $table->boolean('hasDentalPlan3')->nullable();
            $table->boolean('hasProsSpec')->nullable();
            $table->boolean('hasOrtoSpec')->nullable();
            $table->boolean('take_preg_pills')->nullable();
            $table->integer('state_id')->nullable();
            $table->boolean('has_prev_surgeries')->nullable();
            $table->string('typeOfPlan1', 30)->nullable();
            $table->string('typeOfPlan2', 30)->nullable();
            $table->string('speciality')->nullable();

            $table->string('sms_confirmation', 50)->nullable();
            $table->string('CPF', 50)->nullable();
            $table->string('RG', 50)->nullable();
            $table->string('vip', 50)->nullable();
            $table->string('observation', 100)->nullable();
            $table->string('profession')->nullable();

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
