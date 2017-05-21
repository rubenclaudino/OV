<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function scopeRoleFilter($query)
    {
        $user = Auth::user();
        if(!$user->isAdmin())
            return $query->where('name', '!=', 'admin');
        return $query;
    }
}
