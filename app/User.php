<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use EntrustUserTrait;

    protected $guarded = ['id', 'roles'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function agenda()
    {
        return $this->hasOne('App\Agenda');
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

    public function specialities()
    {
        return $this->belongsToMany('App\Specialty');
    }

    public function holidays()
    {
        return $this->hasMany('App\UserHoliday');
    }

    public function ovcosts()
    {
        return $this->hasMany('App\Ovcosts');
    }

    public function ovmodules()
    {
        return $this->hasMany('App\Ovmodules');
    }

    public function isAdmin()
    {
        foreach ($this->roles()->get() as $role) {
            if ($role->name == 'admin')
                return true;
        }
        return false;
    }

    // TODO: redundant, remove once it is working
    public function hasPermission($permission)
    {
        //$this->can($permission);
        return true;
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getLastNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getPhone1Attribute($value)
    {
        return $this->modifyPhoneStringCharacters($value);
    }

    public function getPhone2Attribute($value)
    {
        return $this->modifyPhoneStringCharacters($value);
    }

    public function getWhatsappNumberAttribute($value)
    {
        return $this->modifyPhoneStringCharacters($value);
    }

    public function getPhoneLandlineAttribute($value)
    {
        return $this->modifyPhoneStringCharacters($value);
    }

    private function modifyPhoneStringCharacters($value)
    {
        if ($value != null) {
            $phone = substr_replace($value, '(', 0, 0);
            $phone = substr_replace($phone, ')', 3, 0);
            $phone = substr_replace($phone, ' ', 4, 0);
            $phone = substr_replace($phone, ' ', 9, 0);
            $phone = substr_replace($phone, '-', 10, 0);
            $phone = substr_replace($phone, ' ', 11, 0);

            return $phone;
        }

        return $value;
    }

    public function getEmailAttribute($value)
    {
        return ucfirst($value);
    }

    public function getFullNameAttribute()
    {
        if (Auth::user()->hasRole('dentist'))
            return (($this->gender == 0) ? 'Dr.' : 'Dra.') . ' ' . $this->first_name . ' ' . $this->last_name;
        else
            return $this->first_name . ' ' . $this->last_name;
    }

    public function scopeRoleFilter($query)
    {
        $user = Auth::user();
        if (!$user->isAdmin())
            return $query->where('clinic_id', $user->clinic_id);
        return $query;
    }
}
