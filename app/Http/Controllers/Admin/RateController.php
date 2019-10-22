<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\RateFormRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Session;
use App\Rate;

class RateController extends Controller
{
    public function showRate()
    {
        $rates = Rate::all();
        
        return view('admin.rate.showRate', compact('rates'));
    }

    public function rate()
    {
        return view('admin.rate.addRate');
    }

    public function addRate(RateFormRequest $request)
    {
        Rate::create(request(['name', 'rate_point', 'start_at', 'start_at', 'rate_date_number']));

        return redirect()->to('admincp/addRate');
  
    }      
}
