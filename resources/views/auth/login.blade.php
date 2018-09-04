@extends('masterAuth')
@section('title', 'Đăng Nhập')
@section('content')
    

    <div class="main-w3layouts wrapper">
        <h1>{{ trans('login.SignIp') }}</h1>
        <div class="main-agileinfo">
            <div class="agileits-top"> 
                @if (session()->has('flash_notification.error')) 
                    <div class="alert alert-success">{!! session('flash_notification.error') !!}</div>
                @endif
                {!! Form::open(['method' => 'POST', 'url' => 'login']) !!}
                    {!! csrf_field() !!}
                    
                    {!! Form::text(
                        'email', 
                        old('email'), 
                        [
                            'placeholder' => trans('register.email'),
                            'class' => "text email",
                        ]) 
                    !!}
                    {!! Form::password(
                        'password', 
                        old('password'), 
                        [
                            'placeholder' => trans('register.password'),
                            'class' => "text w3lpass",
                        ]) 
                    !!}
                    {!! Form::submit(trans('register.login')) !!} 
                {!! Form::close() !!}
                <p> <a href="{{ url('auth/facebook') }}" > Login With Facebook </a><p>
                <p>{{ trans('register.question') }}
                    <a href="{{ url('/register') }}">{{ trans('login.register') }}</a>
                </p>
            </div>   
        </div>  
 

        <!-- copyright -->
        <div class="w3copyright-agile">
            <p>{{ trans('register.register') }}
            </p>
        </div>
        <!-- //copyright -->
        <ul class="w3lsg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
@endsection
