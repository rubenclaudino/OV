<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactEntity extends Model
{
    protected $guarded = ['id'];

    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
