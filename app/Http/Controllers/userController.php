<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Location;
use App\Province;

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
        // else
        // if( $id != null && $idpro == null)
        // {

        // }
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
}
