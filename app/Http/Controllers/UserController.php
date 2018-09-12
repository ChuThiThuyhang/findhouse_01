<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\SearchRepositoryInterface;
use Illuminate\Http\Request;
use App\Tour;
use App\Booking;
use App\Location;
use App\Province;
use App\LocationTour;
use App\User;
use DB;
use Input;

class UserController extends Controller
{
    protected $searchRepository;

    public function __construct(SearchRepositoryInterface $searchRepository)
    {
        $this->searchRepository = $searchRepository;
    }

    public function home()
    {
        $tours = Tour::orderBy('price', 'asc')->take(config('constant.number'))->get();
        
        return view('home', compact('tours'));
    }

    public function location()
    {
        $provinces = Province::getProvince();
        $provinces1 = Province::Random()->first();
        $id1 = $provinces1->id;
        $locations = Location::getLocation($id1)->get();
        $local = Location::inRandomOrder()->first();
        $provinces->prepend('Select', 0);

        return view('user.userHome.locationPage', compact('provinces', 'provinces1', 'locations', 'local'));
    }

    public function local($idpro, $id)
    {
        $provinces = Province::getProvince();
        if ($id == null && $idpro == null) {
            $provinces1 = Province::Random()->first();
            $id1 = $provinces1->id;
            $locations = Location::getLocation($id1)->get();
            $local = Location::inRandomOrder()->getLocation($id1)->first();

            return view('user.userHome.locationPage', compact('provinces', 'provinces1', 'locations', 'local'));
        } else {
            $provinces1 = Province::findProvince($idpro);
            $id1 = $provinces1->id;
            $locations = Location::getLocation($id1)->get();
            $local = Location::findLocation($id);

            return view('user.userHome.locationPage', compact('provinces', 'provinces1', 'locations', 'local'));
        }
    }

    public function loadLocal($id)
    {
        if ($id == null) {
            $provinces1 = Province::Random()->first();
            $id1 = $provinces1->id;
            $locations = Province::findLocation($id1)->location->get();
            $provinces = Province::getProvince();
            $local = Province::findProvince($id1)->location->first();

            return view('user.userHome.locationPage', compact('provinces1', 'locations', 'provinces', 'local'));
        } else {
            $idpro = $id;
            $provinces1 = Province::findOrFail($id);
            $id = $provinces1->id;
            $locations = Province::findProvince($id)->location;
            $provinces = Province::getProvince();
            $local = Province::findProvince($id)->location->first();

            return view('user.userHome.locationPage', compact('provinces1', 'locations', 'provinces', 'local', 'idpro'));
        }
    }

    public function detail($id)
    {
        $location = Location::findLocation($id);
        $province = $location->province->get();
        $name = $location->name;

        $location_tours = Location::findLocation($id)->locationtour;
        $tours = [];
        foreach ($location_tours as $local_tour) {
            $tour = $local_tour->tour;
            $tours[] = $tour;
        }
        // $tours = DB::table('tours')->join('_location_tous','_location_tous.tour_id','=','tours.id')
        //     ->join('locations','locations.id','=','_location_tous.location_id')
        //     ->selectRaw('*')
        //     ->where('locations.name',$name)->get();

        return view('user.detail.detailLocation', compact('location', 'tours', 'province'));
    }

    public function tourGui()
    {
        $tours = Tour::all();
        $provinces = Province::getProvince();

        return view('user.detail.detailTour', compact('tours', 'provinces'));
    }

    public function searchTour(Request $request)
    {
        $name = $request->nameLocation;
        $date = $request->Date;

        $location = $this->searchRepository->findLocation($name);
        $id_loca = $location['id'];

        $locationTour = $this->searchRepository->findLocactionTour($id_loca);
        $array  = [];

        $this->searchRepository->searchTour($locations, $array, $date);

        return view('user.search.searchPage', compact('array'));
    }

    public function search(Request $request)
    {
        $provinces = Province::getProvince();
        $date = $request->Date;
        $name = $request->nameLocation;
        $val1 = $request->type1;
        $val2 = $request->price1;

        $type = $this->searchRepository->getType($val1);
        $arrayPrice [] = $this->searchRepository->getPrice($val2);

        $result = $this->searchRepository->searchManyElements($name, $date, $arrayPrice, $type);

        $result->setPath($request->fullUrl());

        return view('user.search.searchPage', compact('result', 'provinces'));;
    }

    public function viewAccount($id)
    {
        $books = Booking::where('users_id', $id)->get();
        $array  = [];
        foreach ($books as $bok) {
            $tourID = $bok->tour_id;
            $tour = Tour::findOrFail($tourID);
            $array[] = [$bok, $tour];   
        }
        
        return view('user.accountUser.myAccount', compact('array'));
    }

    public function editInfo(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $file = Input::file('image_path');

        if (Input::hasFile('image_path')) {
            $avatar = $file -> getClientOriginalName();
            $file->move(config('upload.image'), $avatar);
        } else {
            $avatar = $tour->image;
        }

        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phonenumber = $request->phonenumber;
        $user->image = $avatar;
        $user->update();

        return redirect('/');
    }
}
