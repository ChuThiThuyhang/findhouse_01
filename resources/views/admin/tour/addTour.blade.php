@extends('adminlte::page')
@section('tittle', 'Admin')
@section('content')
            <div class="agileits-top">
            <h1>{{ trans('tour.addTour') }}</h1>
                @include('shared/error')
                {!! Form::open(['method' => 'POST', 'url' => 'admincp/addTour']) !!}
                    {!! Form::text(
                        'name',
                        old('name'),
                        [
                            'placeholder' => trans('tour.Name'),
                            'class' => 'text form-control',
                        ])
                    !!}
                    {!! Form::date(
                        'start_at',
                        old('start_at'),
                        [
                            'placeholder' => trans('rate.start_at'),
                            'class' => 'text w3lpass form-control',
                            'id' => 'start_at',
                            'style'=> 'width:96%'
                        ]) 
                    !!}
                        {!! Form::text(
                        'stay_date_number',
                        old('stay_date_number'),
                        [
                            'placeholder' => trans('tour.stay_date_number'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::text(
                        'price',
                        old('price'),
                        [
                            'placeholder' => trans('tour.price'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::select('rate_id', $rates, null, ['class'=>'']) !!}
                    {!! Form::text(
                        'description',
                        old('description'),
                        [
                            'placeholder' => trans('tour.description'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::file('image') !!}
                    {!! Form::submit(trans('rate.add')) !!}
                {!! Form::close() !!}
            </div>
@endsection
