<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = ['id'];

    public function payment_plan()
    {
        return $this->belongsTo('App\PaymentPlan');
    }
}
