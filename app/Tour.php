<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent;

class Tour extends Model
{
    protected $table = 'tours';
    protected $fillable = [
        'id',
        'name',
        'start_at',
        'stay_date_number',
        'price',
        'rate_id',
        'description',
        'image',
        'slot',
        'transport',
        'priceKid',
        'type',
        'pricekidsup',
    ];

    public function booking()
    {
        return $this->hasMany('App\Booking');
    }

    public function rate()
    {
        return $this->belongsTo('App\Rate');
    }

    public function locationtour()
    {
        return $this->hasMany('App\LocationTour');
    }

    public function customertour()
    {
        return $this->hasMany('App\Customer_tours');
    }

}
