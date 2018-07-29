<?php

namespace App\Http\Controllers;
<<<<<<< 68c4a842680053a6b1d92c88bbd8c41b4e84ae8c
use Illuminate\Http\Request;
use App\Http\Requests\RegisterFormRequest;
use App\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    
    public function postRegister(RegisterFormRequest $request)
    {
        $user = User::create(request(['fullname', 'email', 'phonenumber', 'username', 'password', 'address']));
        
        auth()->login($user);   
        
        return redirect()->to('/');     
    }
}
