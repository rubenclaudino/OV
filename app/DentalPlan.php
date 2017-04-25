<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DentalPlan extends Model
{
    protected $guarded = ['id'];

    public function dental_plan_type()
    {
        return $this->belongsTo('App\DentalPlanType');
    }

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
