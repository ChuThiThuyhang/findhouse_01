@extends('adminlte::page')
@section('tittle', 'Admin')
@section('content')
    <div class="agileits-top">
    <h1>{{ trans('location.addLocation') }}</h1>
        @include('shared/error')
        {!! Form::open(['method' => 'POST', 'url' => 'admincp/addLocation', 'enctype' => 'multipart/form-data']) !!}
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
            {!! Form::select('province_id', $provinces, null, ['class'=>'form-control text-search']) !!}
            <!-- chon file anh -->
                    <label for="imgInp" class="clone">
                        {!! Html::image('none.jpg', 'upload photo', array('class' => 'image_rounded imgId', 'id' => 'imgId', 'width' => '400px', 'height' => '280px' ))!!}
                    </label>
                    {!! Form::hidden('pathPhoto', null, array('class' => 'pathPhoto', 'id' => 'pathPhoto')) !!}
                    {!! Form::file('image_path', array('id' => 'imgInp', 'accept' => 'image/x-png, image/jpeg')) !!}
                    {!! Form::hidden('_token', csrf_token()) !!}
                    <!-- form chon file anh -->
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
@section('js1')
    <script src="https://code.jquery.com/jquery-1.12.0.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="{{ asset('bower_components/myBootstrap-design/cssBookTour/js/uploadImage.js') }}"></script>
@endsection