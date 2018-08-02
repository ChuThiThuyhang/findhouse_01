<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent;

class Rate extends Model
{
    protected $table = 'rates';
    protected $fillable = [
        'id',
        'name',
        'rate_point',
        'start_at',
        'rate_date_number',
    ];

    public function tour()
    {
        return $this->hasMany('App\Tour');
    }
}
