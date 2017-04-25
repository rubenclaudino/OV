<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomReport extends Model
{
    protected $guarded = ['id'];

    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }
}
