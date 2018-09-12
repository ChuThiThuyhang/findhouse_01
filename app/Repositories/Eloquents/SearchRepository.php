<?php
namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\SearchRepositoryInterface;
use App\LocationTour;
use App\Location;
use App\Tour;
use DB;

class SearchRepository implements SearchRepositoryInterface
{
    public function findLocation($name)
    {
        return Location::where('name', $name)->first();
    }

    public function findLocactionTour($id)
    {
        return LocationTour::where('location_id', $id_loca)->get();
    }

    public function getType($type)
    {
        $name = null;
        switch ($type)
        {
            case '0':
                $name = 'Tiết kiệm';
                break;  
            case '1':
                $name = 'Tiêu chuẩn';
                break;
            case '2':
                $name = 'Giá tốt';
                break;
            case '3':
                $name = 'Cao cấp';
                break;
            case '4':
                $name = 'Tour mới';
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
        switch ($val)
        {
            case '0':
                $array = [
                    '0',
                    '1000000'
                ];
                break;
            case '1':
                $array = [
                    '1000000',
                    '2000000
                '];
                break;
            case '2':
                $array = [
                    '2000000',
                    '4000000'
                ];
                break;
            case '3':
                $array = [
                    '4000000',
                    '6000000'
                ];
                break;
            case '4':
                $array = [
                    '6000000',
                    '10000000'
                ];
                break;
            case '5':
                $array = [
                    '1000000',
                    '20000000'
                ];
                break;
            default:
                $array [] = null;
                break;
        }

        return $array;
    }

    public function searchTour($locations, $array, $date)
    {
        foreach ($locations as $location) {
            $id_tour = $location->tour_id;
            $tour = Tour::where('id', $id_tour)->where('start_at', $date)->first();
            $array[] = $tour;
        }
    }

    public function searchManyElements($name, $date, $arrayPrice, $type)
    {
        return DB::table('tours')->join('_location_tous', '_location_tous.tour_id', '=', 'tours.id')
            ->join('locations', 'locations.id', '=', '_location_tous.location_id')
            ->selectRaw('*')
            ->where('locations.name', $name)
            ->where('tours.start_at', $date)
            ->where('tours.type', $type)
            ->where('tours.price', '>=', $arrayPrice[0][0])
            ->where('tours.price', '<', $arrayPrice[0][1])->paginate(config('constant.number_paginate'));
    }
}
