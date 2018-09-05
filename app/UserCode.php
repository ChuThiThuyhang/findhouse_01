<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCode extends Model
{
    protected $table = 'user_codes';
    protected $fillable = [
        'd',
        'user_id',
        'activation_code'
    ];
}
