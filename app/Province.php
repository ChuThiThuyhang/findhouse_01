<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = [
        'id',
        'province_name',
        'description',
    ];

    public function location()
    {
        return $this->hasMany('App\Location');
    }
}
