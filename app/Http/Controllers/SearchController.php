<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class SearchController extends Controller
{


    public function searchByName(Request $request)
    {
        $location = Location::where('name', 'like', '%' .  $request->get('value'). '%')->get();

        return response()->json($location);

    }
}
