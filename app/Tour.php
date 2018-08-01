<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';
    protected $fillable = [
        'tour_id', 
        'name', 
        'start_at', 
        'stay_date_number', 
        'price', 
        'rate_id', 
        'description',
    ];
}
