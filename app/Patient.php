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
        return $this->belongsToMany('App\Disease', 'disease_patient');
    }

    public function pictograms()
    {
        return $this->hasMany('App\Pictogram');
    }

    public function patient_dental_plans()
    {
        return $this->hasMany('App\PatientDentalPlan');
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

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function specialties()
    {
        return $this->belongsToMany('App\Specialty', 'patient_specialty');
    }

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucfirst($value);
    }

    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = ucfirst($value);
    }

    public function getPhone1Attribute($value)
    {
        if ($value != null) {
            $phone = substr_replace($value, '(', 0, 0);
            $phone = substr_replace($phone, ')', 3, 0);
            $phone = substr_replace($phone, ' ', 4, 0);
            $phone = substr_replace($phone, ' ', 10, 0);
            $phone = substr_replace($phone, '-', 11, 0);
            $phone = substr_replace($phone, ' ', 12, 0);

            return $phone;
        } else

            return $value;
    }

    public function getPhone2Attribute($value)
    {
        if ($value != null) {
            $phone = substr_replace($value, '(', 0, 0);
            $phone = substr_replace($phone, ')', 3, 0);
            $phone = substr_replace($phone, ' ', 4, 0);
            $phone = substr_replace($phone, ' ', 10, 0);
            $phone = substr_replace($phone, '-', 11, 0);
            $phone = substr_replace($phone, ' ', 12, 0);

            return $phone;
        } else

            return $value;
    }

    public function getWhatsappNumberAttribute($value)
    {
        if ($value != null) {

            $phone = substr_replace($value, '(', 0, 0);
            $phone = substr_replace($phone, ')', 3, 0);
            $phone = substr_replace($phone, ' ', 4, 0);
            $phone = substr_replace($phone, ' ', 10, 0);
            $phone = substr_replace($phone, '-', 11, 0);
            $phone = substr_replace($phone, ' ', 12, 0);

            return $phone;

        } else

            return $value;
    }

    public function getPhoneLandlineAttribute($value)
    {
        if ($value != null) {

            $phone = substr_replace($value, '(', 0, 0);
            $phone = substr_replace($phone, ')', 3, 0);
            $phone = substr_replace($phone, ' ', 4, 0);
            $phone = substr_replace($phone, ' ', 9, 0);
            $phone = substr_replace($phone, '-', 10, 0);
            $phone = substr_replace($phone, ' ', 11, 0);

            return $phone;

        } else

            return $value;
    }

    public function getEmailAttribute($value)
    {
        return ucfirst($value);
    }
}
