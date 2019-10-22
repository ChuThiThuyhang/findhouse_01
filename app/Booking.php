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
        'time_book',
        'price_total',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }
}
