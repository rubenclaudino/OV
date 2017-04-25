<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = ['id'];

    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }

    public function item_type()
    {
        return $this->belongsTo('App\ItemType');
    }
}
