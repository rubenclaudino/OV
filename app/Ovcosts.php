<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ovcosts extends Model
{
    public function referral()
    {
        return $this->belongsTo('App\User');
    }
}
