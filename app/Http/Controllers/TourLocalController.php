<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Booking;

class TourLocalController extends Controller
{
     public function detail($id)
    {
    	$tour = Tour::find($id);
    	$book = Booking::where('tour_id', '=', $id)->first();
        
        if( $book != null)
        {
            $sum = Booking::where('tour_id', '=', $id)->sum('slot_Book');
        }
        else 
            {
                $sum = 0;
            }
            
        $div = $tour->slot - $sum;
        if($div < 0)
        {
            $div = 0;
        }

        $tours = Tour::orderBy('price', 'asc')->take(3)->get();

        return view('user.detail.tour_detail', compact('tour', 'div', 'tours'));
    }
}
