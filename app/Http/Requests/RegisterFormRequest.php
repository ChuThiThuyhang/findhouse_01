<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fullname' => 'required',
            'email' => 'required|email|unique:users',
            'phonenumber' => 'required|min:11|numeric',
            'address' => 'required',
            'username' => 'required',
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required',
        ];
    }
}
