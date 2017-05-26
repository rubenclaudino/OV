<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    public $table = "specialties";
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function procedures()
    {
        return $this->belongsToMany('App\Procedure');
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
