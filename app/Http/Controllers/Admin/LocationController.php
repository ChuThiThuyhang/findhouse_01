<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\LocationFormRequest;
use App\Http\Controllers\Controller;
use App\Location;
use App\Province;
use Input;

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
        $file = Input::file('image_path');
        
        if(Input::hasFile('image_path'))
        {
            $name = $file -> getClientOriginalName();
            $file->move(config('upload.image'), $name);

        }
        $request->merge([
            'image' => $name
        ]);
        Location::create($request->all());

        return redirect()->to('admincp/addLocation');
    }

    public function searchByName(Request $request)
    {
        $location = Location::where('name', 'like', '%' .  $request->get('value'). '%')->get();

        return response()->json($location); 
    }

    public function editLocal($id)
    {
        $provinces = Province::all()->pluck('province_name', 'id');
        $location = Location::find($id);

        return view('admin.location.edit', compact('provinces', 'location'));
    }

    public function editLocation(Request $request, $id)
    {
        $location = Location::find($id);

        $file = Input::file('image_path');
        
        if(Input::hasFile('image_path'))
        {
            $name = $file -> getClientOriginalName();
            $file->move(config('upload.image'), $name);

        }
        $request->merge([
            'image' => $name
        ]);

        $location->update($request->all());

        return redirect()->to('admincp/location');
    }

    public function delLocation($id)
    {
        $location = Location::findOrFail($id);
        //$location->LocationTour()->update(['location_id'=> null]);
        $location->delete();

        return redirect()->to('admincp/location');
    }
    
}
