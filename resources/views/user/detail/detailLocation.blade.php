@extends('masterDetail')
@section('title', 'Home')
@section('content1')
<section class="section-gap info-area" id="about">
				<div class="container">				
					<div class="single-info row mt-40">
						<div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
							<div class="info-thumb">
								<img src="{{ asset('bower_components/myBootstrap-design/lib/img/'.$location->image)}}" href="{{ asset('bower_components/myBootstrap-design/lib/img/'.$location->image)}}" class="img-fluid" alt="">
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
	                                <div class="card-img"><img src="{{ asset('bower_components/myBootstrap-design/lib/img/'.$tour->image)}}" width="260px" height="160px"></div>
	                                <div class="card-body">
	                                   <h5>{{$tour->name}}</h5>
	                                   <h4 class="pt-1 pb-2">{{$tour->stay_date_number}}</h4>
	                                   <h4 class="pt-1 pb-2">{{$tour->start_at}}</h4>
	                                   <h4 class="pt-1 pb-2">{{$tour->price}}</h4>
	                                   <button type= "button" class="btn btn-outline-danger btn-block btn-sm">Dat Tour</button>
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
