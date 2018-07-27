<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    protected $fillable = [
        'fullname', 
        'email', 
        'phonenumber', 
        'username', 
        'address', 
        'role',
    ];
    protected $hidden = [
        'password', 
        'remember_token',
    ];
    public function booking()
    {
        return $this->hasMany('App\Booking', 'users_id', 'id');
    }
}
