<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = ['id', 'roles'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function agenda()
    {
        return $this->hasOne('App\Agenda');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function chat_messages()
    {
        return $this->belongsToMany('App\ChatMessage');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }

    public function login_logs()
    {
        return $this->hasMany('App\LoginLogs');
    }

    public function consultations()
    {
        return $this->hasMany('App\Consultation');
    }

    public function patients()
    {
        return $this->hasMany('App\Patient');
    }

    public function clinic()
    {
        return $this->belongsTo('App\Clinic');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    public function specialties()
    {
        return $this->belongsToMany('App\Specialty');
    }

    public function holidays()
    {
        return $this->hasMany('App\UserHoliday');
    }


    public function hasRole($roleName)
    {
        foreach ($this->roles()->get() as $role) {
            if ($role->name == $roleName)
                return true;
        }
        return false;
    }

    public function isAdmin()
    {
        foreach ($this->roles()->get() as $role) {
            if ($role->name == 'Admin')
                return true;
        }
        return false;
    }

    public function hasPermission($permission)
    {
        return true;
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

}
