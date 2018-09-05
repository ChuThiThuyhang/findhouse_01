<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Input;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'confirmed' =>'1',
        ];

        if (Auth::attempt($credentials))
        {
            
            if (Auth::user()->role == 1)
            {
                return redirect()->intended('/admincp');
            }
            else
            {
                return redirect()->intended('/');
            }
        }
        else
        {
            $request->session()->flash('flash_notification.error', trans('login.message1'));
            
            return redirect()->back();
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }
}
