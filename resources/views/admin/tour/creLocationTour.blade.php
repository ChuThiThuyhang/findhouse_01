@extends('adminlte::page')
@section('tittle', 'Admin')
@section('content')
            <div class="agileits-top">
            <h1>{{ trans('tour.addTour') }}</h1>
                @include('shared/error')
                {!! Form::open(['method' => 'POST', 'url' => 'admincp/showTourLocation', 'enctype' => 'multipart/form-data']) !!}
                   
                    {!! Form::select('tour_id', $tours, null, ['class'=>'']) !!}
                    <!-- {!! Form::select('location_id', $locations, null, ['class' => '', 'multiple']) !!} -->
                    <select class="mdb-select colorful-select dropdown-primary" multiple searchable="Search here..">
                        <option value="" disabled selected>Choose your country</option>
                        <option value="1">USA</option>
                        <option value="2">Germany</option>
                        <option value="3">France</option>
                        <option value="4">Poland</option>
                        <option value="5">Japan</option>
                    </select>
<label>Label example</label>
                 
                    {!! Form::submit(trans('rate.add')) !!}
                {!! Form::close() !!}
            </div>
@endsection
@section('js1')
    <script src="https://code.jquery.com/jquery-1.12.0.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="{{ asset('bower_components/myBootstrap-design/cssBookTour/js/uploadImage.js') }}"></script>
@endsection