@extends('adminlte::page')
@section('tittle', 'Admin')
@section('content')
            <div class="agileits-top">
            <h1>{{ trans('tour.editTour') }}</h1>
                @include('shared/error')
                {!! Form::model($tour, ['url' => ['admincp/editTour', $tour->id], 'method' => 'POST']) !!}
                    {!! Form::text(
                        'name',
                        null,
                        [
                            'placeholder' => trans('tour.Name'),
                            'class' => 'text form-control'
                        ])
                    !!}
                    {!! Form::date(
                        'start_at',
                        null,
                        [
                            'placeholder' => trans('rate.start_at'),
                            'class' => 'text w3lpass form-control',
                            'id' => 'start_at',
                            'style'=> 'width:96%'
                        ]) 
                    !!}
                        {!! Form::text(
                        'stay_date_number',
                        null,
                        [
                            'placeholder' => trans('tour.stay_date_number'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}

                    {!! Form::text(
                        'price',
                        null,
                        [
                            'placeholder' => trans('tour.price'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::select('rate_id', $rates, null, ['class'=>'']) !!}
                    {!! Form::textarea(
                        'description',
                        null,
                        [
                            'placeholder' => trans('tour.description'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    <!-- chon file anh -->
                    {!! Form::file('image') !!}
                    <!-- form chon file anh -->
                    {!! Form::text(
                        'slot',
                        null,
                        [
                            'placeholder' => trans('tour.slot'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::text(
                        'transport',
                        null,
                        [
                            'placeholder' => trans('tour.transport'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::text(
                        'priceKid',
                        null,
                        [
                            'placeholder' => trans('tour.priceKid'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::text(
                        'type',
                        null,
                        [
                            'placeholder' => trans('tour.type'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::text(
                        'pricekidsup',
                        null,
                        [
                            'placeholder' => trans('tour.priceKid'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
                    {!! Form::submit(trans('tour.save')) !!}
                {!! Form::close() !!}
            </div>
@endsection
@section('js1')
    <script src="https://code.jquery.com/jquery-1.12.0.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="{{ asset('bower_components/myBootstrap-design/cssBookTour/js/uploadImage.js') }}"></script>
@endsection