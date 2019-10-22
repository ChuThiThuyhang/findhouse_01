@extends('adminlte::page')
@section('tittle', 'Admin')
@section('content')
    <div class="agileits-top">
        <h1>{{ trans('rate.addRate') }}</h1>
        @include('shared/error')
        {!! Form::open(['method' => 'POST', 'url' => asset('admincp/addRate')]) !!}
            {!! csrf_field() !!}
            {!! Form::text(
                'name',
                old('name'),
                [
                    'placeholder' => trans('rate.Name'),
                    'class' => 'text form-control',
                ])
            !!}
            {!! Form::text(
                'rate_point',
                old('rate_point'),
                [
                    'placeholder' => trans('rate.rate_point'),
                    'class' => 'text w3lpass form-control',
                ])
            !!}
            {!! Form::date(
                'start_at',
                old('start_at'),
                [
                    'placeholder' => trans('rate.start_at'),
                    'class' => 'text w3lpass form-control',
                    'id' => 'start_at',
                ]) 
            !!}
            {!! Form::text(
                'rate_date_number',
                old('rate_date_number'),
                [
                    'placeholder' => trans('rate.numberday'),
                    'class' => 'text w3lpass form-control',
                ])
            !!}
            {!! Form::submit(trans('rate.add')) !!}
        {!! Form::close() !!}
    </div>
@endsection
