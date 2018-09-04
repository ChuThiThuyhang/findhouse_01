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
            <form method="get" action="/search" class="colorlib-form">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="date" style="color: #ffffff;font-weight: 700;font-size: 16px;">Nơi đến</label>
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
                            <label for="date" style="color: #ffffff;font-weight: 700;font-size: 16px;">Ngày khởi hành</label>
                            <div class="form-field">
                              <i class="icon icon-calendar2"></i>
                              <input id="date" class="form-control date" placeholder="Check-out date" type="date" name="Date">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="adults" style="color: #ffffff;font-weight: 700;font-size: 16px;">Loại Tour</label>
                            <div class="form-field">
                              <i class="icon icon-arrow-down3"></i>
                              <select name="type" id="type1" class="form-control">
                                <select name="people" id="type" class="form-control">
                                    <option value="0">Tiết kiệm</option>
                                    <option value="1">Tiêu chuẩn</option>
                                    <option value="2">Giá tốt</option>
                                    <option value="3">Cao cấp</option>
                                    <option value="4">Tour mới</option>
                                </select>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label for="children" style="color: #ffffff;font-weight: 700;font-size: 16px;">Giá</label>
                            <div class="form-field">
                              <i class="icon icon-arrow-down3"></i>
                              <select name="price" id="people" class="form-control">
                                <option value="0">Dưới 1 triệu</option>
                                <option value="1">1-2 triệu</option>
                                <option value="2">2-4 triệu</option>
                                <option value="3">4-6 triệu</option>
                                <option value="4">6-10 triệu</option>
                                <option value="5">Trên 10 triệu</option>
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
<div class="grid_8" style="width: 1140px;"> 
<div class="container-fluid mb-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-light">
                <div class="card-body">
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
                                        @foreach($tours->chunk(3) as $chunk)
                                        <div class="swiper-slide @if($loop->first) active @endif">
                                            <div class="row">
                                                @foreach($chunk as $tour)
                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <div class="card-img"><img src="{{ asset(config('upload.image').'/'.$tour->image)}} " width="260px" height="160px"></div>
                                                            <div class="card-body">
                                                               <h5 style="text-align: center; font-weight: 600;">{{$tour->name}}</h5>
                                                               <h4 class="pt-1 pb-2">{{trans('tour.stay_date_number1').$tour->stay_date_number}}</h4>
                                                               <h4 class="pt-1 pb-2">{{trans('tour.start_at1').$tour->start_at}}</h4>
                                                               <h4 class="pt-1 pb-2">{{trans('tour.price').$tour->price}}</h4>
                                                               @if (Auth::check())
                                                               <div class="button book_button"><a href="{{ url('/bookTour/'.$tour->id) }}">book<span></span><span></span><span></span></a></div>
                                                               @else
                                                               <div class="button book_button"><a href="{{ url('/login') }}">book<span></span><span></span><span></span></a></div>
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
                                        @foreach($tours->chunk(3) as $chunk)
                                        <div class="swiper-slide @if($loop->first) active @endif">
                                            <div class="row">
                                                @foreach($chunk as $tour)
                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <div class="card-img"><img src="{{ asset('bower_components/myBootstrap-design/lib/img/'.$tour->image)}}" width="260px" height="160px"></div>
                                                            <div class="card-body">
                                                               <h5 style="text-align: center; font-weight: 600;">{{$tour->name}} 
                                                               </h5>
                                                               <h4><<a>{{trans('tour.stay_date_number1').$tour->stay_date_number}}</a></h4>
                                                               <h4><a>{{trans('tour.start_at1').$tour->start_at}}</a></h4>
                                                               <h4><a>{{trans('tour.price').$tour->price}}</a></h4>
                                                               @if (Auth::check())
                                                               <div class="button book_button"><a href="{{ url('/bookTour/'.$tour->id) }}">book<span></span><span></span><span></span></a></div>
                                                               @else
                                                               <div class="button book_button"><a href="{{ url('/login') }}">book<span></span><span></span><span></span></a></div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="grid_3 prefix_1" style="width: 220px;">
    <ul class="list">
        <li> 
        <div class="form-group">
            <label for="adults" style="color: black;font-weight: 700;font-size: 16px;">Tỉnh</label>
            <div class="form-field">
                <i class="icon icon-arrow-down3"></i>
                <select name="people" id="province" class="form-control">
                <option selected>------chọn tỉnh------</option>
                    @foreach($provinces as $province)
                        <option value="{{$province->id}}">{{ $province->province_name }}</option>
                    @endforeach
                </select>    
            </div>
        </div>
        </li>
        <li> 
        <div class="form-group">
            <label for="adults" style="color: black;font-weight: 700;font-size: 16px;">Loại Tour</label>
            <div class="form-field">
                <i class="icon icon-arrow-down3"></i>
                <select name="people" id="type" class="form-control">
                    <option value="0">Tiết kiệm</option>
                    <option value="1">Tiêu chuẩn</option>
                    <option value="2">Giá tốt</option>
                    <option value="3">Cao cấp</option>
                    <option value="4">Tour mới</option>
                </select>    
            </div>
        </div>
        </li>
        <li style="border-bottom: 4px solid black;">
            
          <div class="form-group">
            <label for="children" style="color: black;font-weight: 700;font-size: 16px;">Giá</label>
            <div class="form-field">
              <i class="icon icon-arrow-down3"></i>
              <select name="people" id="price" class="form-control">
                <option value="0">Dưới 1 triệu</option>
                <option value="1">1-2 triệu</option>
                <option value="2">2-4 triệu</option>
                <option value="3">4-6 triệu</option>
                <option value="4">6-10 triệu</option>
                <option value="5">Trên 10 triệu</option>
              </select>
          </div>
        </div>
        </li>
    </ul>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $("#price").change(function(){
        var id = $('#price option:selected').val();
        location.href="/searchPrice/" + id;
    });

    $("#province").change(function(){
        var name = $('#province option:selected').val();
        location.href="/searchProvince/" + name;
    });
    $("#type").change(function(){
        var type = $('#type option:selected').val();
        location.href="/searchType/" + type;
        $.ajax({
            url: "/getType",
            type: "POST",
            dataType: "text",
            data: { 
                Type: type,
            },
            success: function (response){
                console.log(response);
                $("#type").append(response);
            },
            error: function (error){
                console.log('that bai');
            }
        });
    });
</script>
@endsection
