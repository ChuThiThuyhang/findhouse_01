@extends('masterAuth')
@section('title', 'Đăng ký')
@section('content')
    <div class="main-w3layouts wrapper">
        <h1>{{ trans('register.SignUp') }}</h1>
        <div class="main-agileinfo">
            <div class="agileits-top" style="background: rgba(0, 0, 0, 0.4117647058823529)">
                @include('shared/error')
                {!! Form::open(['method' => 'POST', 'url' => 'register']) !!}
                    {!! csrf_field() !!}
                    {!! Form::text(
                        'fullname',
                        old('fullname'),
                        [
                            'placeholder' => trans('register.fullname'),
                            'class' => 'text',
                            'background-color' => '#ffff !important',
                        ])
                    !!}
                    {!! Form::email(
                        'email',
                        old('email'),
                        [
                            'placeholder' => trans('register.email'),
                            'class' => 'text email',
                        ])
                    !!}
                    {!! Form::text(
                        'phonenumber',
                        old('phonenumber'),
                        [
                            'placeholder' => trans('register.phonenumber'),
                            'class' => 'text w3lpass',
                        ])
                    !!}
                    {!! Form::text(
                        'address',
                        old('address'),
                        [
                            'placeholder' => trans('register.address'),
                            'class' => 'text w3lpass',
                        ]) 
                    !!}
                    {!! Form::text(
                        'username',
                        old('username'),
                        [
                            'placeholder' => trans('register.username'),
                            'class' => 'text w3lpass',
                        ])
                    !!}
                    {!! Form::password(
                        'password',
                        null,
                        [
                            'placeholder' => trans('register.password'),
                            'class' => 'text w3lpass',
                        ])
                    !!}
                    <br>
                    <br>
                    {!! Form::password(
                        'confirm_password',
                        null,
                        [
                            'placeholder' => trans('register.confirm_password'),
                            'class' => 'text w3lpass',
                        ])
                    !!}
                    {!! Form::submit(trans('register.SignUp')) !!}
                {!! Form::close() !!}
                <p>{{ trans('register.question') }}
                    <a href="{{ url('/login') }}">{{ trans('register.loginnow') }}</a>
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
