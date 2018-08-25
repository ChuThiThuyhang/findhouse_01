@extends('masterAdmin')
@section('title', 'Tour')
@section('content1')
<!-- <div class="col-md-12 search-wrap">
<div class="col-md-12" style="padding-bottom: 20px; padding-top: -30px; margin-top: -20px;"> -->
<div class="colorlib-reservation" style="
    width: 100%;
    display: block;
    margin-top: -10px;
    z-index: 9;
    background: #3e5784;
    padding: 35px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 search-wrap" style="margin-top: 100px">
            <form method="post" action="{{ action('userController@searchTour') }}" class="colorlib-form">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="date">Nơi đến</label>
                                <div class="form-field">
                                    <i class="icon icon-calendar2"></i>
                                    <div id="prefetch">
                                        
                                        <input type="search" name="nameLocation" class="form-control search-input" id="search-input" placeholder="Type something..." autocomplete="off">
                                    
                                    </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="date">Ngày khởi hành</label>
                            <div class="form-field">
                              <i class="icon icon-calendar2"></i>
                              <input id="date" class="form-control date" placeholder="Check-out date" type="date" name="Date">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="adults">Loại Tour</label>
                            <div class="form-field">
                              <i class="icon icon-arrow-down3"></i>
                              <select name="people" id="people" class="form-control">
                                <option value="#">1</option>
                                <option value="#">2</option>
                                <option value="#">3</option>
                                <option value="#">4</option>
                                <option value="#">5+</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="children">Giá</label>
                            <div class="form-field">
                              <i class="icon icon-arrow-down3"></i>
                              <select name="people" id="people" class="form-control">
                                <option value="#">1</option>
                                <option value="#">2</option>
                                <option value="#">3</option>
                                <option value="#">4</option>
                                <option value="#">5+</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <input name="submit" id="submit" value="Search" class="btn btn-primary btn-block" type="submit" style="margin-top: 29px;">
                        </div>
                  </div>
                </form>
          </div>
        </div>
      </div>
<!--     </div>
    </div> -->
</div>
@endsection
@section('content2')
<div class="grid_8">
<div class="container-fluid mb-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-light">
                <div class="card-body">
                    <div class="row py-3">
                        <div class="col-md-12">
                            <h4>Related Search Results</h4>
                            <div class="divider"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="row text-center mb-3">
                                <div class="col-md-12">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Swiper -->
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="row">
                                                @for($i = 0; $i < count($array); $i++)
                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <div class="card-img"><img src="{{ asset(config('upload.image').'/'.$array[$i]->image)}} " width="260px" height="160px"></div>
                                                            <div class="card-body">
                                                               <h5 style="text-align: center; font-weight: 600;">{{$array[$i]->name}}</h5>
                                                               <h4 class="pt-1 pb-2">{{trans('tour.stay_date_number1').$array[$i]->stay_date_number}}</h4>
                                                               <h4 class="pt-1 pb-2">{{trans('tour.start_at1').$array[$i]->start_at}}</h4>
                                                               <h4 class="pt-1 pb-2">{{trans('tour.price').$array[$i]->price}}</h4>
                                                               <div class="button book_button"><a href="{{ url('/bookTour/'.$array[$i]->id) }}">book<span></span><span></span><span></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="grid_3 prefix_1">
                    <h5>CHOOse the country</h5>
                    <ul class="list">
                        <li><a href="#">Albania</a></li>
                        <li><a href="#">American Samoa</a></li>
                        <li><a href="#">Antarctica</a></li>
                        <li><a href="#">Argentina</a></li>
                        <li><a href="#">Armenia</a></li>
                        <li><a href="#">Australia</a></li>
                        <li><a href="#">Austria</a></li>
                        <li><a href="#">Bahrain</a></li>
                        <li><a href="#">Barbados</a></li>
                        <li><a href="#">Belgium</a></li>
                        <li><a href="#">Belize</a></li>
                        <li><a href="#">Bermudas</a></li>
                    </ul>
                    <a href="#" class="link1">VIEW A<span class="low">ll</span></a>
                </div>
@endsection
