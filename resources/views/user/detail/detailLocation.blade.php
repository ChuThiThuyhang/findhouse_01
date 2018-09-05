@extends('masterDetail')
@section('title', 'Home')
@section('content1')
<section class="section-gap info-area" id="about">
				<div class="container">				
					<div class="single-info row mt-40">
						<div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
							<div class="info-thumb">
								<img src="{{ asset(config('upload.image').'/'.$location->image)}}" href="{{ asset(config('upload.image').'/'.$location->image)}}" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-lg-6 col-md-12 no-padding info-rigth">
							<div class="info-content">
								<h2 class="pb-30">{{ $location->name }}</h2>
								<p>
									{{ trans('home.addresss').$location->address }} 				
								</p>
								<br>
								<p>
									{{ trans('home.tav').$location->description }}				
								</p>
								<br>
								</div>
						</div>
					</div>
					<br>
					<br>
					<br>
				</div>
				</section>
@endsection
@section('content2')
<div class="container">
    <div class="row text-center mb-3">
        <div class="col-md-12">
            <h2>{{ trans('home.usetour').$location->name }}</h2>
            <hr>
        </div>
    </div>
	<div class="row">
		<!-- Swiper -->
		<div class="swiper-container">
			<div class="swiper-wrapper">
				@if($tours)
		        @foreach($tours->chunk(4) as $chunk)
		      	<div class="swiper-slide @if($loop->first) active @endif">
					<div class="row">
						@foreach($chunk as $tour)
	                        <div class="col-md-3">
	                            <div class="card">
                                    <div class="card-img"><img src="{{ asset(config('upload.image').'/'.$tour->image)}}" width="260px" height="160px"></div>
                                    <div class="card-body">
                                       <h5 style="text-align: center; font-weight: 600;">{{$tour->name}} 
                                       </h5>
                                       <br>
                                       <br>
                                       <h4 style="text-align: left; font-weight: 500;"><a>{{trans('tour.stay_date_number1').': '.$tour->stay_date_number}}</a></h4>
                                       <h4 style="text-align: left; font-weight: 500;"><a>{{trans('tour.start_at1').': '.$tour->start_at}}</a></h4>
                                       <h4 style="text-align: left; font-weight: 500;"><a>{{trans('tour.price').': '.$tour->price}}</a></h4>
                                       @if (Auth::check())
                                       <div class="button book_button" style="margin-left: 30px; padding-top: -5px;"><a href="{{ url('/bookTour/'.$tour->id) }}">book<span></span><span></span><span></span></a></div>
                                       @else
                                       <div class="button book_button" style="margin-left: 35px; padding-top: -5px;"><a href="{{ url('/login') }}">book<span></span><span></span><span></span></a></div>
                                       @endif
                                    </div>
                                </div>
	                        </div>
	                    @endforeach
					</div>
		    	</div>
			    @endforeach
	        	@endif
    		</div>
    	</div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
	<div class="swiper-button-prev"></div>
</div>
@endsection
