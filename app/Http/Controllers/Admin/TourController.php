<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\TourFormRequest;
use App\Http\Controllers\Controller;
use App\Tour;
use App\Rate;
use App\Photo;
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

    public function editTour(TourFormRequest $request, $id)
    {
        $name = null;
        $file = Input::file('image_path');
        
        if(Input::hasFile('image_path'))
        {
            $name = $file -> getClientOriginalName();
            $file->move(config('upload.image'), $name);
        }

        $tour = Tour::find($id);
        $tour->name = $request->input('name');
        $tour->start_at = $request->input('start_at');
        $tour->stay_date_number = $request->input('stay_date_number');
        $tour->price = $request->input('price');
        $tour->rate_id = $request->input('rate_id');
        $tour->description = $request->input('description');
        $tour->image = $request->input('image_path');
        $tour->slot = $request->input('slot');
        $tour->transport = $request->input('name');
        $tour->priceKid = $request->input('priceKid');
        $tour->type = $request->input('type');
        $tour->priceKid = $request->input('pricekidsup');
        $tour->save();

        return redirect()->to('admincp/tour');
    }
}
