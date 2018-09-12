<?php
namespace App\Repositories\Contracts;

interface SearchRepositoryInterface
{
    public function findLocation($name);
    public function findLocactionTour($id);
    public function getType($type);
    public function getPrice($val);
    public function searchTour($locations, $array, $date);
    public function searchManyElements($name, $date, $array, $type);
}
