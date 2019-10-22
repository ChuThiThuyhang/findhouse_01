<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent;

class LocationTour extends Model
{
    protected $table = '_location_tous';
    protected $fillable = [
        'location_id',
        'tour_id',
    ];

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }
}
