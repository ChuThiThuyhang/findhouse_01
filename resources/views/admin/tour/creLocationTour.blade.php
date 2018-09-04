@extends('adminlte::page')
@section('tittle', 'Admin')
@section('content')
            <div class="agileits-top">
            <h1>{{ trans('tour.addTour') }}</h1>
                @include('shared/error')
                {!! Form::open(['method' => 'POST', 'url' => 'admincp/showTourLocation', 'enctype' => 'multipart/form-data']) !!}
                   
                    {!! Form::select('tour_id', $tours, null, ['class'=>'']) !!}
                    {!! Form::select('location_id', $locations, null, ['class'=>'']) !!}
                 
                    {!! Form::submit(trans('rate.add')) !!}
                {!! Form::close() !!}
            </div>
@endsection
@section('js1')
    <script src="https://code.jquery.com/jquery-1.12.0.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="{{ asset('bower_components/myBootstrap-design/cssBookTour/js/uploadImage.js') }}"></script>
@endsection