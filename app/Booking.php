<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent;

class Booking extends Model
{
    // use Notifiable;
    protected $table = 'book_tours';
    protected $fillable = [
        'bookid',
        'tour_id',
        'users_id',
        'price_total',
        'description',
        'status',
        'slot_Book'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }

    public function customer_tour()
    {
        return $this->hasMany('App\Customer_tours');
    }
}
