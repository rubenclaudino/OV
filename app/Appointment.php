<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }

    public function procedures()
    {
        return $this->hasMany('App\Procedure');
    }

    public function status()
    {
        return $this->belongsTo('App\AppointmentStatus', 'appointment_status_id', 'id');
    }

    public function appointment_type()
    {
        return $this->belongsTo('App\AppointmentType', 'appointment_type_id', 'id');
    }

    public function clinic_dental_plan()
    {
        return $this->belongsTo('App\ClinicDentalPlan', 'clinic_dental_plan_id', 'id');
    }

    public function specialty()
    {
        return $this->belongsTo('App\Specialty');
    }
}
