@extends('adminlte::page')
@section('tittle', 'Admin')
@section('content')
    <div class="agileits-top">
    <h1>{{ trans('location.addLocation') }}</h1>
        @include('shared/error')
        {!! Form::open(['method' => 'POST', 'url' => 'admincp/addLocation']) !!}
            {!! Form::text(
                'name',
                old('name'),
                [
                    'placeholder' => trans('location.name'),
                    'class' => 'text form-control',
                ])
            !!}
                {!! Form::text(
                'address',
                old('address'),
                [
                    'placeholder' => trans('location.address'),
                    'class' => 'text w3lpass form-control',
                ])
            !!}
            {!! Form::select('province_id', $provinces, null, ['class'=>'']) !!}
            {!! Form::file('image') !!}
            {!! Form::text(
                'description',
                old('description'),
                [
                    'placeholder' => trans('location.description'),
                    'class' => 'text w3lpass form-control',
                ])
            !!}
            {!! Form::submit(trans('location.add')) !!}
        {!! Form::close() !!}
    </div>
@endsection
