<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function patients()
    {
        return $this->belongsToMany('App\Patient');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }
}
