<?php

namespace App\Http\Controllers\Admin;

// use Illuminate\Http\Request;
use Request;
use App\Http\Requests\TourFormRequest;
use App\Http\Requests\EditTourFormRequest;
use App\Http\Controllers\Controller;
use App\Tour;
use App\Rate;
use App\Photo;
use App\Location;
use App\LocationTour;
use Input;

class TourController extends Controller
{
    public function show()
    {
        $tours = Tour::All();
        
        return view('admin.tour.show', compact('tours'));
    }

    public function tour()
    {
        $rates = Rate::all()->pluck('name', 'id');

        return view('admin.tour.addTour', compact('rates'));
    }

    public function addTour(TourFormRequest $request)
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
        Tour::create($request->all());

        return redirect()->to('admincp/tour');
    }     

    public function edit($id)
    {
        $rates = Rate::all()->pluck('name', 'id');
        $tour = Tour::find($id);

        return view('admin.tour.editTour', compact('rates', 'tour'));
    }

    public function editTour(EditTourFormRequest $request, $id)
    {
        $tour = Tour::findOrFail($id);
        $file = Input::file('image_path');
        if(Input::hasFile('image_path'))
        {
            $name = $file -> getClientOriginalName();
            $file->move(config('upload.image'), $name);

        }
        else $name = $tour->image;
        $request->merge([
            'image' => $name
        ]);
        
        $tour->update($request->all());

        return redirect()->to('admincp/tour');
    }

    public function creLoTour()
    {
        $locations = Location::all()->pluck('name', 'id');
        $tours = Tour::all()->pluck('name', 'id');

        return view('admin.tour.creLocationTour', compact('locations', 'tours'));
    }

    public function show1()
    {
        $lotours = LocationTour::all();

        return view('admin.tour.showLocation', compact('lotours'));
    }

    // public function creLoTour()
    // {
    //     $locations = Location::all()->pluck('name', 'id');
    //     $tours = Tour::all()->pluck('name', 'id');

    //     return view('admin.tour.creLocationTour', compact('locations', 'tours'));
    // }

    public function save(Request $request)
    {
        LocationTour::create($request->all());

        return redirect()->to('admincp/lotour');
    }

   

}
