<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DentalPlanType extends Model
{
    protected $guarded = ['id'];

    public function dental_plans()
    {
        return $this->hasMany('App\DentalPlan');
    }
}
