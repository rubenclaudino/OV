<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientDentalPlan extends Model
{
    protected $guarded = ['id'];

    public function clinic_dental_plan()
    {
        return $this->belongsTo('App\ClinicDentalPlan');
    }

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
