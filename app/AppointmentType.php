<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppointmentType extends Model
{
    protected $guarded = ['id'];

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }
}
