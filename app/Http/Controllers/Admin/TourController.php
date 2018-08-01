<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tour;

class TourController extends Controller
{
    public function show()
    {
        $tours = Tour::all();
        
        return view('admin.tour.show', compact('tours'));
    }
}
