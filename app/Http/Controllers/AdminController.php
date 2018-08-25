<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Input as Input;
use App\Photo;
use DB;

class AdminController extends Controller
{
    public function getUpload()
	{
	    return view('user.detail.test');
	}

	public function postUpload(Request $request)
	{
	    try
	    {
	    	$data = array('image_path'=>insertPhoto('image_path', 'no image', $request));
		    DB::table('tblImage')->insert($data);

		    return view('user.detail.test');
		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}
	}

	public static function insertPhoto($fileName, $defaultName=null, TourFormRequest $request)
    {

    	$photo = null;
    	$file = Input::file('image_path');
        
    	if(Input::hasFile('image_path'))
    	{
    		$name = $file -> getClientOriginalName();
    		$file->move('upload', $name);
    	}
    	else 
    	{
    		$photo = $defaultName;
    	}
        
    	return $photo;
    }

}
