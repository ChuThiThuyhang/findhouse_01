<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterFormRequest;
use App\User;
use Mail;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    
    public function postRegister(RegisterFormRequest $request)
    {
        $data = ['foo' => 'baz'];
        Mail::send('mailautosend', $data, function($message){
                    $message->to('thainv1612@gmail.com', 'Visitor')->subject('Feedback!');
                    $message->from('chuhangpt96@gmail.com','Admin Kansai Book');
                });
        $user = User::create(request(['fullname', 'email', 'phonenumber', 'username', 'password', 'address']));
        
        auth()->login($user);   
        
        return redirect()->to('/');     
    }
}
