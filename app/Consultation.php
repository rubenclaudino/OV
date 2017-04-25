<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
