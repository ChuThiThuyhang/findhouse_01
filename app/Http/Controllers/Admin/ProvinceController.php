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
        $province = Province::findOrFail($id);
        $province->location()->update(['province_id'=> null]);
        $province->delete();
       
        return redirect()->to('admincp/province');
    }
}
