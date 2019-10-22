<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RateFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'rate_point' => 'required|numeric',
            'start_at' => 'required',
            'rate_date_number' => 'required|max:10|integer',
        ];
    }
}
