@extends('adminlte::page')
@section('tittle', 'Admin')
@section('content')
<div class="container">
      <h1>Edit Profile</h1>
      <hr>
      {!! Form::model($location, ['url' => ['admincp/editLocation', $location->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          
          <div class="form-group row">
            <label for="example-search-input" class="col-2 col-form-label" style="color: black">
                <strong>
                    Tên địa điểm
                </strong>
            </label>
            <div class="col-10">
              <input class="form-control" type="text" value="{{ $location->name }}" name="name" id="example-text-input" style="color:black; border: 1px solid #ccc !important; border-radius: 4px !important;">
            </div>
          </div>
          <div class="form-group row">
            <label for="example-search-input" class="col-2 col-form-label" style="color: black">
                <strong>
                    Địa chỉ
                </strong>
            </label>
            <div class="col-10">
              <input class="form-control" type="text" value="{{ $location->address }}" name="address" id="example-text-input" style="color:black; border: 1px solid #ccc !important; border-radius: 4px !important;">
            </div>
          </div>
          <div class="form-group row">
            <label for="example-search-input" class="col-2 col-form-label" style="color: black">
                <strong>
                    Tỉnh
                </strong>
            </label>
            <div class="col-10">
              {!! Form::select('province_id', $provinces, null, ['class'=>'form-control search-input']) !!}
            </div>
          </div>
          <div class="form-group row">
            <label for="imgInp" class="clone">
                        {!! Html::image(asset(config('upload.image').'/'.$location->image), 'upload photo', array('class' => 'image_rounded imgId', 'id' => 'imgId', 'width' => '400px', 'height' => '280px' )) !!}
                    </label>
                    {!! Form::hidden('pathPhoto', null, array('class' => 'pathPhoto', 'id' => 'pathPhoto')) !!}
                    {!! Form::file('image_path', array('id' => 'imgInp', 'accept' => 'image/x-png, image/jpeg')) !!}
          </div>
          <div class="form-group row">
              {!! Form::textarea(
                        'description',
                        null,
                        [
                            'placeholder' => trans('tour.description'),
                            'class' => 'text w3lpass form-control',
                        ])
                    !!}
          </div>
    {!! Form::submit(trans('tour.save')) !!}
  {!! Form::close() !!} 
      <hr>
  </div>
  @endsection
@section('js1')
    <script src="https://code.jquery.com/jquery-1.12.0.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="{{ asset('bower_components/myBootstrap-design/cssBookTour/js/uploadImage.js') }}"></script>
@endsection