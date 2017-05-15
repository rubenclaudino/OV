<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    protected $guarded = ['id'];

    public $table = "bug";
}
