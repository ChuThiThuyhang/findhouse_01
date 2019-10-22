@extends('master')
@section('title', 'Tour')
@section('content')
<div id="colorlib-reservation">
      <div class="container">
        <div class="row">
          <div class="col-md-12 search-wrap">
            <form method="post" class="colorlib-form">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="date">Nơi khởi đến</label>
                                <div class="form-field">
                                    <i class="icon icon-calendar2"></i>
                                    <input id="date" class="form-control date" placeholder="Check-in date" type="text">
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="date">Ngày khởi hành</label>
                            <div class="form-field">
                              <i class="icon icon-calendar2"></i>
                              <input id="date" class="form-control date" placeholder="Check-out date" type="text">
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
                          <input name="submit" id="submit" value="Search" class="btn btn-primary btn-block" type="submit">
                        </div>
                  </div>
                </form>
          </div>
        </div>
      </div>
    </div>
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
                                        @if($tours)
                                        @foreach($tours->chunk(4) as $chunk)
                                        <div class="swiper-slide @if($loop->first) active @endif">
                                            <div class="row">
                                                @foreach($chunk as $tour)
                                                    <div class="col-md-3">
                                                        <div class="card">
                                                            <div class="card-img"><img src="{{ asset('bower_components/myBootstrap-design/lib/img/'.$tour->image)}}" width="260px" height="160px"></div>
                                                            <div class="card-body">
                                                               <h5 style="text-align: center; font-weight: 600;">{{$tour->name}}</h5>
                                                               <h4 class="pt-1 pb-2">{{trans('tour.stay_date_number1').$tour->stay_date_number}}</h4>
                                                               <h4 class="pt-1 pb-2">{{trans('tour.start_at1').$tour->start_at}}</h4>
                                                               <h4 class="pt-1 pb-2">{{trans('tour.price').$tour->price}}</h4>
                                                               <button type= "button" class="btn btn-outline-danger btn-block btn-sm">Đặt Tour</button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                                        @if($tours)
                                        @foreach($tours->chunk(4) as $chunk)
                                        <div class="swiper-slide @if($loop->first) active @endif">
                                            <div class="row">
                                                @foreach($chunk as $tour)
                                                    <div class="col-md-3">
                                                        <div class="card">
                                                            <div class="card-img"><img src="{{ asset('bower_components/myBootstrap-design/lib/img/'.$tour->image)}}" width="260px" height="160px"></div>
                                                            <div class="card-body">
                                                               <h5 style="text-align: center; font-weight: 600;">{{$tour->name}}</h5>
                                                               <h4 class="pt-1 pb-2">{{trans('tour.stay_date_number1').$tour->stay_date_number}}</h4>
                                                               <h4 class="pt-1 pb-2">{{trans('tour.start_at1').$tour->start_at}}</h4>
                                                               <h4 class="pt-1 pb-2">{{trans('tour.price').$tour->price}}</h4>
                                                               <button type= "button" class="btn btn-outline-danger btn-block btn-sm">Đặt Tour</button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection