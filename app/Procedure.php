<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    protected $guarded = ['id'];

   // public function clinic()
   // {
   //    return $this->belongsTo('App\Clinic');
   // }

   // public function appointments()
   // {
   //     return $this->belongsTo('App\Appointment');
   // }

    public function specialties()
    {
        return $this->belongsTo('App\Specialty', 'specialty_id');
    }
}
