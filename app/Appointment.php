<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = ['id'];
    /*protected $fillable = [
        'appointment_status_id',
        'patient_id',
        'clinic_id',
        'user_id'
    ];*/

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
        return $this->belongsTo('App\AppointmentStatus');
    }


}
