<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_tours extends Model
{
    protected $table = 'customer_tours';
    protected $fillable = [
        'id',
        'tour_id',
        'customer_id',
        'book_tour_id',
    ];

    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function booking()
    {
        return $this->belongsTo('App\Booking');
    }
}
