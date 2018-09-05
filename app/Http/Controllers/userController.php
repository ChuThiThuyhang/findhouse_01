<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Booking;
use App\Location;
use App\Province;
use App\LocationTour;
use App\User;
use DB;
use Input;

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
        $provinces = Province::All()->pluck('province_name', 'id');

        if( $id == null && $idpro == null)
        {
            $provinces1 = Province::inRandomOrder()->first();
            $id1 = $provinces1->id;
            $locations = Location::where('province_id', '=', $id1)->get();
            $local = Location::inRandomOrder()->where('province_id', '=', $id1)->first();

            return view('user.userHome.locationPage', compact('provinces', 'provinces1','locations', 'local'));
        }
        else
        {
            $provinces1 = Province::find($idpro);
            $id1 = $provinces1->id;
            $locations = Location::where('province_id', '=', $id1)->get();
            $local = Location::find($id);;

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
            $local = Location::inRandomOrder()->where('province_id', '=', $id1)->first();

            return view('user.userHome.locationPage', compact('provinces1', 'locations', 'provinces', 'local'));
        }
        else
        {
            $idpro = $id;
            $provinces1 = Province::find($id);
            $id = $provinces1->id;
            $locations = Location::where('province_id', '=', $id)->get();
            $provinces = Province::All()->pluck('province_name', 'id');
           
            $local = Location::inRandomOrder()->where('province_id', '=', $id)->first();

            return view('user.userHome.locationPage', compact('provinces1', 'locations', 'provinces', 'local', 'idpro'));
        }
    }

    public function detail($id)
    {
        $location = Location::find($id);
        $id1 = $location->province_id;
        $province = Province::where('id','=', $id1)->get();
        $name = $location->name;
        $tours = DB::table('tours')->join('_location_tous','_location_tous.tour_id','=','tours.id')
                                    ->join('locations','locations.id','=','_location_tous.location_id')
              ->selectRaw('*')
              ->where('locations.name',$name)
              ->get();

        return view('user.detail.detailLocation', compact('location', 'tours', 'province'));
    }

    public function tourGui()
    {
        $tours = Tour::All();
        $provinces = Province::All();

        return view('user.detail.detailTour', compact('tours', 'provinces'));
    }

    public function searchTour(Request $request)
    {
        $name = $request->nameLocation;
        $date = $request->Date;
        $location = Location::where('name','=',$name)->first();
        $id_loca = $location['id'];
        $locationTour = LocationTour::where('location_id','=',$id_loca)->get();
        // dd($locationTour);
        $array  = [];
        foreach ($locationTour as $location) {
            $id_tour = $location->tour_id;
            $tour = Tour::where('id','=',$id_tour)->where('start_at','=',$date)->first();
            $array[] = $tour;
        }

        return view('user.search.searchPage', compact('array'));
    }

    public function getType($type)
    {
        $name = null;

        switch ($type) {
            case '0':
                $name = "Tiết kiệm";
                break;
            
            case '1':
                $name = "Tiêu chuẩn";
                break;

            case '2':
                $name = "Giá tốt";
                break;

            case '3':
                $name = "Cao cấp";
                break;

            case '4':
                $name = "Tour mới";
                break;

            default:
                $name = null;
                break;
        }

        return $name;
    }

    public function getPrice($val)
    {
        $array [] = null;
        switch ($val) {
            case '0':
                $array = ['0', '1000000'];
                break;
            
            case '1':
                $array = ['1000000', '2000000'];
                break;

            case '2':
                $array = ['2000000', '4000000'];
                break;

            case '3':
                $array = ['4000000', '6000000'];
                break;

            case '4':
                $array = ['6000000', '10000000'];
                break;

            case '5':
                $array = ['1000000', '20000000'];
                break;

            default:
                $array [] = null;
                break;
        }

        return $array;
    }

    public function search(Request $request)
    {
        $provinces = Province::All();
        $date = $request->Date;
        $name = $request->nameLocation;
        $val1 = $request->type1;
        $val2 = $request->price1;

        $type = userController::getType($val1);
        $arrayPrice [] = userController::getPrice($val2);
        $result = DB::table('tours')->join('_location_tous','_location_tous.tour_id','=','tours.id')
                                    ->join('locations','locations.id','=','_location_tous.location_id')
              ->selectRaw('*')
              ->where('locations.name',$name)
              ->where('tours.start_at',$date)
              ->where('tours.type',$type)
              ->where('tours.price','>=',$arrayPrice[0][0])
              ->where('tours.price','<',$arrayPrice[0][1])
              ->paginate(6);
              $result->setPath($request->fullUrl());

        //dd($result);
        return view('user.search.searchPage', compact('result', 'provinces'));;
    }

    public function viewAccount($id)
    {
        $books = Booking::where('users_id','=',$id)->get();
        $array  =[];
        
        foreach ($books as $bok)
        {
            $tourID = $bok->tour_id;
            $tour = Tour::find($tourID);
            $array[] = [$bok, $tour];
            
        }
        // dd($array);
        return view('user.accountUser.myAccount', compact('array'));
    }

    public function editInfo(Request $request, $id)
    {
        $user = User::find($id);
        $file = Input::file('image_path');
        if(Input::hasFile('image_path'))
        {
            $name = $file -> getClientOriginalName();
            $file->move(config('upload.image'), $name);

        }
        else $name = $tour->image;
        
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phonenumber = $request->phonenumber;
        $user->image = $name;

        $user->update();

        return redirect('/');
    }
}
