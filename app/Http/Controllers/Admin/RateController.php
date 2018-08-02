<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rate;

class RateController extends Controller
{
    public function showRate()
    {
        $rates = Rate::all();
        
        return view('admin.rate.showRate', compact('rates'));
    }
}
