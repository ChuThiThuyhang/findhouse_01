<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent;

class Location extends Model
{
    protected $table = 'locations';
    protected $fillable = [
        'id',
        'name',
        'address',
        'province_id',
        'image',
        'description',
    ];

    public function province()
    {
        return $this->belongsTo('App\Province');
    }

    public function locationtour()
    {
        return $this->hasMany('App\LocationTour');
    }

    public function plan()
    {
        return $this->hasMany('App\Plan');
    }
}
