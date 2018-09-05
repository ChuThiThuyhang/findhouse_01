<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent;
use Nicolaslopezj\Searchable\SearchableTrait;

class Location extends Model
{
    use SearchableTrait;


    protected $searchable = [
        'columns' => [
            'locations.name' => 10,
            'locations.address' => 5,
            'locations.province_id' => 3,
        ]
    ];

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
