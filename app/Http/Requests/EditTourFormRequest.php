<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditTourFormRequest extends FormRequest
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
            'start_at' => 'required',
            'stay_date_number' => 'required|max:10|integer',
            'price' => 'required|integer',
            'rate_id' => 'required',
            'description' => 'required',
            'image_path' => '',
        ];
    }
}
