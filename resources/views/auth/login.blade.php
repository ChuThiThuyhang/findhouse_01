@extends('masterAuth')
@section('title', 'Đăng Nhập')
@section('content')
    
    <div class="main-w3layouts wrapper">
        <h1>{{ trans('login.SignIp') }}</h1>
        <div class="main-agileinfo">
            <div class="agileits-top" style="background: rgba(0, 0, 0, 0.4117647058823529);"> 
                @if (isset($message))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif
                @if (session()->has('flash_notification.error')) 
                    <div class="alert alert-success">{!! session('flash_notification.error') !!}</div>
                @endif
                {!! Form::open(['method' => 'POST', 'url' => 'login']) !!}
                    {!! csrf_field() !!}
                    {!! Form::label('email', 'E-Mail Address', ['class' => 'awesome', 'style' => 'color: #ffff']) !!}
                    {!! Form::text(
                        'email',
                        old('email'), 
                        [
                            'placeholder' => trans('register.email'),
                            'class' => 'text email',
                        ]) 
                    !!}
                    {!! Form::label('password', 'Password', ['class' => 'awesome', 'style' => 'color: #ffff']) !!}
                    {!! Form::password(
                        'password', 
                        old('password'), 
                        [
                            'placeholder' => trans('register.password'),
                            'class' => 'text email',
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
