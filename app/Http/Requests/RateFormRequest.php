<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
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
