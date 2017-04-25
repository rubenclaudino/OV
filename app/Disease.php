<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $guarded = ['id'];

    public function patients()
    {
        return $this->belongsToMany('App\Patient');
    }
}
