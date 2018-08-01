<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = [
        'id',
        'fullname',
        'email',
        'phonenumber',
        'username',
        'address',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function booking()
    {
        return $this->hasMany('App\Booking');
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
