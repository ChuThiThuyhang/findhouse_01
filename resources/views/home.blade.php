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
                <div class="col-lg-4 intro_col">
                    <div class="intro_item">
                        <div class="intro_item_overlay"></div>
                        <div class="intro_item_background" style="background-image:url({{ asset('bower_components/myBootstrap-design/lib/img/'.$tour->image) }})">
                        </div>
                        <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                            <div class="intro_date">{{ $tour->start_at }}</div>
                            <div class="button intro_button"><div class="button_bcg"></div>
                                <a href="#">{{ trans('tour.seemore') }}
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                            <div class="intro_center text-center">
                                <div class="intro_price">{{ $tour->price }}</div>
                                <div class="rating rating_4">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
