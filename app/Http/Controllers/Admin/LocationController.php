<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Location;

class LocationController extends Controller
{
    public function showLocation()
    {
        $locations = Location::all();
        
        return view('admin.location.showLocation', compact('locations'));
    }
}
