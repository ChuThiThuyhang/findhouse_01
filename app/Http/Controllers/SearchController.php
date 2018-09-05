<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Tour;
use App\Province;
use DB;

class SearchController extends Controller
{


    public function searchByName(Request $request)
    {
        $location = Location::where('name', 'like', '%' .  $request->get('value'). '%')->get();

        return response()->json($location);

    }

    public function searchByPrice($id)
    {
    	$provinces = Province::All();
        $idPrice = $id;
    	$result = null;
    	switch ($id) {
    		case '0':
    			$result = Tour::where('price','<',1000000)->paginate(6);
    			break;
    		
    		case '1':
    			$result = Tour::where('price','>=',1000000)
    						->where('price','<',2000000)
    						->paginate(6);
    			break;

    		case '2':
    			$result = Tour::where('price','>=',2000000)
    						->where('price','<',4000000)
    						->paginate(6);
    			break;

    		case '3':
    			$result = Tour::where('price','>=',4000000)
    						->where('price','<',6000000)
    						->paginate(6);
    			break;

    		case '4':
    			$result = Tour::where('price','>=',6000000)
    						->where('price','<',10000000)
    						->paginate(6);
    			break;

    		case '5':
    			$result = Tour::where('price','>=',10000000)->paginate(6);
    			break;

    		default:
    			$result = null;
    			break;
    	}
    	// dd($result);

    	return view('user.search.searchPage', compact('result', 'provinces','idPrice'));
    }

    public function searchByNameProvince($id)
    {

    	$provinces = Province::All();
        $result = DB::table('tours')->join('_location_tous','_location_tous.tour_id','=','tours.id')
                                    ->join('locations','locations.id','=','_location_tous.location_id')
                                    ->join('provinces','provinces.id','=','locations.province_id')
              ->selectRaw('*')
              ->where('provinces.id',$id)
              ->simplePaginate(6);
        

        return view('user.search.searchPage', compact('result', 'provinces','id'));
    }

    public function searchByType($type)
    {
    	$provinces = Province::All();
    	$idType = $type;
    	$result = null;
    	switch ($type) {
    		case '0':
    			$result = Tour::where('type','=','Tiết kiệm')->paginate(6);
    			break;
    		
    		case '1':
    			$result = Tour::where('type','=','Tiêu chuẩn')->paginate(6);
    			break;

    		case '2':
    			$result = Tour::where('type','=','Giá tốt')->paginate(6);
    			break;

    		case '3':
    			$result = Tour::where('type','=','Cao cấp')->paginate(6);
    			break;

    		case '4':
    			$result = Tour::where('type','=','Tour mới')->paginate(6);
    			break;

    		default:
    			$result = null;
    			break;
    	}
    	// dd($result);

    	return view('user.search.searchPage', compact('result', 'provinces','idType'));
    }

    public function getType(Request $request)
    {
    	$type = $_POST['Type'];
    	$result = null;
    	switch ($type) {
    		case '0':
    			$result = 'Tiết kiệm';
    			break;
    		
    		case '1':
    			$result = 'Tiêu chuẩn';
    			break;

    		case '2':
    			$result = 'Giá tốt';
    			break;

    		case '3':
    			$result = 'Cao cấp';
    			break;

    		case '4':
    			$result ='Tour mới';
    			break;

    		default:
    			$result = null;
    			break;
    	}
    	dd($result);
    	return $result;
    }

    public function searchLocal(Request $request)
    {
        $provinces = Province::All()->pluck('province_name', 'id');
        $provinces1 = Province::inRandomOrder()->first();
        $locations = Location::search($request->get('nameLocation'))->get();
        // dd($locations);
        $local = Location::search($request->get('nameLocation'))->first();

        return view('user.userHome.locationPage', compact('provinces', 'provinces1','locations', 'local'));
        
    }
}
