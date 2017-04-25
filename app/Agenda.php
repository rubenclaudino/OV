<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
