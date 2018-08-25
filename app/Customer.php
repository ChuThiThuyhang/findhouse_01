<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customers';
    protected $fillable = [
        'id',
        'fullname',
        'sex',
        'birthday',
        'cardID',
        'cardID_kid',
        'type',
    ];

    public function customertour()
    {
        return $this->hasMany('App\Customer_tours');
    }
}
