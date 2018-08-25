<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Tour;

class BookingController extends Controller
{
    public function pageBook($id)
    {
    	
    // 	Mail::send('mailautosend', $data, function($message){
    //                 $message->to('thainv1612@gmail.com', 'Visitor')->subject('Feedback!');
    //                 $message->from('chuhangpt96@gmail.com','Admin Kansai Book');
    //             });
    	$tour = Tour::find($id);
        return view('user.booktour.tourInfo', compact('tour'));
    }

    public function showListGuest(Request $request)
    {
        return [
                    'html' => view('user.booktour.showListGuest')->render(),
                ];
        // $Total = $_POST['Total']; 
        // $adult = $_POST['adult']; 
        // $children = $_POST['children']; 
        // $small_children = $_POST['small_children'];
        // $id = $_POST['tour_id'];
        // if( $Total != 0 )
        // {
        //     if($adult > 0)
        //     {
        //         $price = Tour::find(id)->price();
        //         $type = 'Người lớn';
        //         return [
        //             'html' => view('user.booktour.showListGuest',compact('price', type))->render(),
        //         ];
        //     }
        //     else 
        //     {
        //         if ($children > 0) {
        //             $price = Tour::find(id)->priceKid();
        //             $type = 'Trẻ em';
        //             return [
        //                 'html' => view('user.booktour.showListGuest',compact('price', 'type'))->render(),
        //             ];
        //         }
        //         else
        //         {
        //             if($small_children > 0)
        //             {
        //                 $price = Tour::find(id)->pricekidsub();
        //                 $type = 'Trẻ nhỏ';
        //                 return [
        //                     'html' => view('user.booktour.showListGuest',compact('price', 'type'))->render(),
        //                 ];
        //             }
        //         }
        //     }
                
        // }
    }


}
