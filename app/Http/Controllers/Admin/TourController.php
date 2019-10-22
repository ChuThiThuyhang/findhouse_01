<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\TourFormRequest;
use App\Http\Controllers\Controller;
use App\Tour;
use App\Rate;

class TourController extends Controller
{
    public function show()
    {
        $tours = Tour::all();
        
        return view('admin.tour.show', compact('tours'));
    }

    public function tour()
    {
        $rates = Rate::all()->pluck('name', 'id');

        return view('admin.tour.addTour', compact('rates'));
    }

    public function addTour(TourFormRequest $request)
    {
        Tour::create(request(['name', 'start_at', 'stay_date_number', 'price', 'rate_id', 'description', 'image']));

        return redirect()->to('admincp/addTour');
    }     
}
