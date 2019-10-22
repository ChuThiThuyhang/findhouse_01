@extends('adminlte::page')
@section('tittle', 'Admin')
@section('content')
    <div class="agileits-top">
    <h1>{{ trans('province.addprovince') }}</h1>
        @include('shared/error')
        {!! Form::open(['method' => 'POST', 'url' => 'admincp/province']) !!}
            {!! csrf_field() !!}
            {!! Form::text(
                'province_name',
                old('province_name'),
                [
                    'placeholder' => trans('province.province_name'),
                    'class' => 'text form-control',
                ])
            !!},
            {!! Form::text(
                'description',
                old('description'),
                [
                   'placeholder' => trans('province.description'),
                   'class' => 'text w3lpass form-control',
                ])
            !!}
            {!! Form::submit(trans('rate.add')) !!}
        {!! Form::close() !!}
    </div>
@endsection
