<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Location;
use App\Province;
use App\LocationTour;

class userController extends Controller
{
    public function home()
    {
        $tours = Tour::orderBy('price', 'asc')->take(3)->get();
        
        return view('home', compact('tours'));
    }

    public function location()
    {
        $provinces = Province::All()->pluck('province_name', 'id');
        $provinces1 = Province::inRandomOrder()->first();
        $id1 = $provinces1->id;
        $locations = Location::where('province_id', '=', $id1)->get();
        $local = Location::inRandomOrder()->first();
        $provinces->prepend("Select",0);

        return view('user.userHome.locationPage', compact('provinces', 'provinces1','locations', 'local'));
    }

    public function local($idpro, $id)
    {
        if( $id == null && $idpro == null)
        {
            $provinces = Province::All()->pluck('province_name', 'id');
            $provinces1 = Province::inRandomOrder()->first();
            $id1 = $provinces1->id;
            $locations = Location::where('province_id', '=', $id1)->get();
            $local = Location::inRandomOrder()->where('province_id', '=', $id1)->first();
            $provinces->prepend("Select",0);

            return view('user.userHome.locationPage', compact('provinces', 'provinces1','locations', 'local'));
        }
        else
        {
            $provinces = Province::All()->pluck('province_name', 'id');
            $provinces1 = Province::find($idpro);
            $id1 = $provinces1->id;
            $locations = Location::where('province_id', '=', $id1)->get();
            $local = Location::find($id);;
            $provinces->prepend("Select",0);

            return view('user.userHome.locationPage', compact('provinces', 'provinces1','locations', 'local'));
        }
    }

    public function loadLocal($id)
    {
        if( $id == null )
        {
            $provinces1 = Province::inRandomOrder()->first();
            $id1 = $provinces1->id;
            $locations = Location::where('province_id', '=', $id1)->get();
            $provinces = Province::All()->pluck('province_name', 'id');
            $provinces->prepend("Select",0);
            $local = Location::inRandomOrder()->where('province_id', '=', $id1)->first();

            return view('user.userHome.locationPage', compact('provinces1', 'locations', 'provinces', 'local'));
        }
        else
        {
            $provinces1 = Province::find($id);
            $id = $provinces1->id;
            $locations = Location::where('province_id', '=', $id)->get();
            $provinces = Province::All()->pluck('province_name', 'id');
            $provinces->prepend("Select",0);
            $local = Location::inRandomOrder()->where('province_id', '=', $id)->first();

            return view('user.userHome.locationPage', compact('provinces1', 'locations', 'provinces', 'local'));
        }
    }

    public function detail($id)
    {
        $location = Location::find($id);
        $id1 = $location->province_id;
        $province = Province::where('id','=', $id1)->get();
        $tours = Tour::with('locationtour')->get();

        return view('user.detail.detailLocation', compact('location', 'tours', 'province'));
    }

    public function tourGui()
    {
        $tours = Tour::All();

        return view('user.detail.detailTour', compact('tours'));
    }

    public function searchTour(Request $request)
    {
        $name = $request->nameLocation;
        $date = $request->Date;
        $location = Location::where('name','=',$name)->first();
        $id_loca = $location['id'];
        $locationTour = LocationTour::where('location_id','=',$id_loca)->get();
        // dd($locationTour);
        $array  =[];
        foreach ($locationTour as $location) {
            $id_tour = $location->tour_id;
            $tour = Tour::where('id','=',$id_tour)->where('start_at','=',$date)->first();
            $array[] = $tour;
        }

        return view('user.search.searchPage', compact('array'));
    }
}
