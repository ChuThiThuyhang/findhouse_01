@extends('master')
@section('title', 'Home')
@section('content')
    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="intro_title text-center">{{ trans('tour.cheapTour') }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="intro_text text-center">
                        <p>{{ trans('tour.Lorem') }}</p>
                    </div>
                </div>
            </div>
            <div class="row intro_items">
                <!-- Intro Item -->
                @if($tours)
                @foreach($tours as $tour)
                <div class="col-md-4 col-sm-6">
                            <div class="single-package-item" style="box-shadow: 0 0 20px rgba(0,0,0,.1);">
                                <img src="{{ asset(config('upload.image').'/'.$tour->image)}}" alt="package-place" style="border: none;max-width: 100%;height: auto; vertical-align: middle; box-sizing: border-box;">
                                <div class="single-package-item-txt">
                                    <h4 style="border-bottom: 1px solid #ccc;">{{ $tour->name }}<span class="pull-right">${{ $tour->price }}</span></h4>
                                    <div class="packages-para" style="padding: 17px 0 0;text-transform: capitalize;">
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i>{{ $tour-> stay_date_number}} daays
                                            </span>
                                        </p>
                                        <p>
                                            <span>
                                                <i class="fa fa-angle-right"></i>  transportation {{ $tour->transport }}
                                            </span>
                                         </p>
                                    </div><!--/.packages-para-->
                                    <div class="about-btn">
                                        <button class="btn btn-info" style="color: #ffff;border-radius: 10px !important;">
                                            book now
                                            @if (Auth::check())
                                               <a href="{{ url('/bookTour/'.$tour->id) }}"><span></span><span></span><span></span></a>
                                               @else
                                               <a href="{{ url('/login') }}"><span></span><span></span><span></span></a>
                                               @endif
                                        </button>
                                    </div><!--/.about-btn-->
                                </div><!--/.single-package-item-txt-->
                            </div><!--/.single-package-item-->

                        </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset(config('upload.image').'/'.$tour->image)}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset(config('upload.image').'/'.$tour->image)}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset(config('upload.image').'/'.$tour->image)}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection
