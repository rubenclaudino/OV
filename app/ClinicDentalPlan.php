<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClinicDentalPlan extends Model
{
    protected $guarded = ['id'];

    public function patient_dental_plans()
    {
        return $this->hasMany('App\PatientDentalPlan');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }
}
