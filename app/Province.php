<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use SoftDeletes;
    protected $table = 'provinces';
    protected $fillable = [
        'id',
        'province_name',
        'description',
    ];

    public function location()
    {
        return $this->hasMany(Location::class);
    }
}
