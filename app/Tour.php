<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Notifiable;
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
