<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    protected $guarded = ['id'];

    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }

    public function appointment()
    {
        return $this->belongsTo('App\Appointment');
    }

    public function specialities()
    {
        return $this->belongsTo('App\Specialty');
    }
}
