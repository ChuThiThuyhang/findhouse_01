<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent;

class Plan extends Model
{
    protected $table = 'plans';
    protected $fillable = [
        'id',
        'plan_name',
        'location_id',
        'start_at',
        'datenumber',
        'content',
    ];

    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
