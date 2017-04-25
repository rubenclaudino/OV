<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $guarded = ['id'];

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }

    public function custom_reports()
    {
        return $this->hasMany('App\CustomReport');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    public function patients()
    {
        return $this->hasMany('App\Patient');
    }

    public function procedures()
    {
        return $this->hasMany('App\Procedure');
    }

    public function subscription()
    {
        return $this->belongsTo('App\Subscription');
    }
}
