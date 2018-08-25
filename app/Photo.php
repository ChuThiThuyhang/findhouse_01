<?php

namespace App;

// use Illuminate\Support\Facades\Input;
use Input;
use App\Http\Requests\TourFormRequest;

Class Photo
{
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
