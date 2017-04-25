<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $guarded = ['id'];

    public function patient()
    {
        return $this->hasMany('App\Patient');
    }
}
