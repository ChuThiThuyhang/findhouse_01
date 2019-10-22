<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'start_at' => 'required',
            'stay_date_number' => 'required|max:10|integer',
            'price' => 'required|integer',
            'rate_id' => 'required',
            'description' => 'required',
            'image' => '',
        ];
    }
}
