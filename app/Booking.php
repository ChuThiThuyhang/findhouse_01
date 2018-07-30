<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // use Notifiable;
    protected $table = 'book_tours';
    protected $fillable = [
        'bookId', 
        'tour_id', 
        'users_id', 
        'time_book', 
        'price_total', 
        'description',
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'users_id', 'id');
    }
    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }
}
