<?php

namespace App\Http\Controllers\Admin;

use App\Province;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Requests\ProvinceFormRequest;
use App\Http\Controllers\Controller;


class ProvinceController extends Controller
{
    public function showProvines()
    {
        $provinces = Province::all();
        
        return view('admin.province.showProvince', compact('provinces'));
    }
// ho nay 2 ham giong ten nhau la ko dc
    public function showProvine()
    {
        
        return view('admin.province.addProvince');
    }

    public function addProvine(ProvinceFormRequest $request)
    {
        Province::create($request->all());

        return redirect()->to('admincp/province');
    }

    public function delProvine($id)
    {
        $locations = Province::find($id)->location;
        $province = Province::find($id);
        $province->delete();
        foreach ($locations as $location) {
            $location->province_id = 0;
            $location->save();
        }
        

        $provinces = Province::all();
        
        return view('admin.province.showProvince', compact('provinces')); 
    }
}
