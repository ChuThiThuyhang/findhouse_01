<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterFormRequest;
use Hash;
use App\User;
use Mail;
use Input;


class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    
    public function postRegister(RegisterFormRequest $request)
    {
        $confirmation_code = str_random(30);

        $user = User::create([
            'fullname' => Input::get('fullname'),
            'email' => Input::get('email'),
            'phonenumber' => Input::get('phonenumber'),
            'username' => Input::get('username'),
            'password' => Input::get('password'),
            'address' => Input::get('address'),
            'confirmation_code' => $confirmation_code
        ]);

        Mail::send('mailautosend1', ['confirmation_code' => $confirmation_code], function($message) {
            $message->to(Input::get('email'), Input::get('username'))
                ->subject('Verify your email address');
        });

        // Flash::message('Thanks for signing up! Please check your email.');
        
        return view('user.userHome.notificationCheckMail');     
    }

    public function verify($code)
    {
        $user = User::where('confirmation_code', $code)->first();
        if (count($user) > 0) {
            $user->confirmed = 1;
            $user->confirmation_code = null;
            $user->save();
            $notification_status = 'Bạn đã xác nhận thành công';
        } else {
            $notification_status ='Mã xác nhận không chính xác';
        }

        auth()->login($user);

        return redirect()->to('/'); 
    }
}
