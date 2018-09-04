<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookTourRequest;
use App\Http\Controllers\Controller;
use Mail;
use App\User;
use App\Tour;
use App\Booking;
use App\Customer;
use App\Customer_tours;

class BookingController extends Controller
{
    public function pageBook($id)
    {

    //  Mail::send('mailautosend', $data, function($message){
    //                 $message->to('thainv1612@gmail.com', 'Visitor')->subject('Feedback!');
    //                 $message->from('chuhangpt96@gmail.com','Admin Kansai Book');
    //             });
        $tour = Tour::find($id);
        $book = Booking::where('tour_id', '=', $id)->get();
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

        return view('user.booktour.tourInfo', compact('tour', 'div'));
    }

    public function showListGuest(Request $request)
    {
        $total = $_POST['Total'];
        $adult = $_POST['adult'];
        $children = $_POST['children'];
        $small_children = $_POST['small_children'];
        $id = $_POST['tour_id'];
        $tour = Tour::find($id);
        return [
            'html' => view('user.booktour.showListGuest',compact('total','adult','small_children','children','tour'))->render(),
        ];
    }

    public function create(Request $request){
        $total  = intval($request->adult+$request->children+$request->small_children);
        $booking = new Booking();
        $booking->tour = $request->idTour;
        $booking->contact_name = $request->contact_name;
        $booking->mobilephone = $request->mobilephone;
        $booking->address = $request->address;
        $booking->adult = $request->adult;
        $booking->children = $request->children;
        $booking->small_children = $request->small_children;
        $booking->note = $request->note;
        $booking->contact_name = $request->contact_email;
        $booking->mobilephone_2 = $request->mobilephone2;
        

        $booking->save();

        $id_booking = $booking->id;
        for ($i=1; $i <= $total; $i++) {
            $booking_detail = new BookingDetail();
            $booking_detail->fullname = $request->fullname[$i];
            $booking_detail->gender = $request->gender[$i]->val();
            $booking_detail->date = $request->date[$i];
            $booking_detail->person = $request->person[$i];
            $booking_detail->loaiphuthuphong = $request->loaiphuthuphong[$i];
            $booking_detail->nationality = $request->nationality[$i];
            $booking_detail->fullname = $request->fullname[$i];
            $booking_detail->passport = $request->passport[$i];
            $booking_detail->deadline_date = $request->deadline_date[$i];
            $booking_detail->price = $request->price[$i];

            $booking_detail->save();
        }
        // chuyển trang về trang nào đó
    }

    public function confirm(BookTourRequest $request, $id)
    {
        $total  = intval($request->adult+$request->children+$request->small_children);
        $booking = new Booking();
        $booking->tour_id = $request->idTour;
        $booking->users_id = $id;
        $booking->price_total = $request->Sum;
        $booking->description = $request->Note;
        $booking->status = "chuyen tiep";
        $booking->slot_Book = $total;
        
        $booking->save();
        $array  =[];
        $id_booking = $booking->id;
        for ($i=1; $i <= $total; $i++) {
            $customer = new Customer();
            $customer->fullname = $request->fullname[$i];
            $customer->sex = $request->gender[$i];
            $customer->birthday = $request->date[$i];
            $customer->cardID = $request->cardID[$i];
            $customer->type = $request->person[$i];
            $customer->save();

            $array[] = $customer;
            $customerOfTour = new Customer_tours();
            $customerOfTour->tour_id = $request->idTour;
            $customerOfTour->customer_id = $customer->id;
            $customerOfTour->book_tour_id = $id_booking;
            $customerOfTour->save();
        }

        $user = User::find($id);
        $id_tour = $request->idTour;
        $tour = Tour::find($id_tour);
        $price_total = $request->Sum;
        // dd($array);
        return view('user.booktour.confirmBook', compact('user', 'tour', 'array', 'price_total'));
    }

}
