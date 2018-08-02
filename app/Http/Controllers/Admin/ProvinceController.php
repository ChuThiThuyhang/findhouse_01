<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Province;

class ProvinceController extends Controller
{
    public function showProvine()
    {
        $provinces = Province::all();
        
        return view('admin.province.showProvince', compact('provinces'));
    }
}
