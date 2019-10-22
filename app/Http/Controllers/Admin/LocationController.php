<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\LocationFormRequest;
use App\Http\Controllers\Controller;
use App\Location;
use App\Province;

class LocationController extends Controller
{
    public function showLocation()
    {
        $locations = Location::all();
        
        return view('admin.location.showLocation', compact('locations'));
    }

    public function location()
    {
        $provinces = Province::all()->pluck('province_name', 'id');

        return view('admin.location.addLocation', compact('provinces'));
    }

    public function addLocation(LocationFormRequest $request)
    {
        Location::create(request(['name', 'address', 'province_id', 'image', 'description']));

        return redirect()->to('admincp/addLocation');
    }  
}
