<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 1) {
                return redirect()->intended('/admincp');
            }
            else {
                return redirect()->intended('/');
            }
        }
        else {
            $request->session()->flash('flash_notification.error', trans('login.message'));
            
            return redirect()->back();
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }
}
