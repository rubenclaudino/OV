<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = ['id'];

    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }

    public function referral()
    {
        return $this->belongsTo('App\Referral');
    }

    public function diseases()
    {
        return $this->belongsToMany('App\Disease');
    }

    public function pictograms()
    {
        return $this->hasMany('App\Pictogram');
    }

    public function dental_plans()
    {
        return $this->hasMany('App\DentalPlan');
    }

    public function consultations()
    {
        return $this->hasMany('App\Consultation');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function dentistica_detail()
    {
        return $this->hasOne('App\DentisticaDetail');
    }

    public function orthodontic_detail()
    {
        return $this->hasOne('App\OrthodonticDetail');
    }

    public function prosthetic_detail()
    {
        return $this->hasOne('App\ProstheticDetail');
    }

    public function implant_detail()
    {
        return $this->hasOne('App\ImplantDetail');
    }
}
