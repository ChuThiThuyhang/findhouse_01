@extends('masterBook')
@section('title', 'BookTour')
@section('infoTour')
    <div class="row">  
            <!--Summary Information of Tour-->
            <div class="row tour-info" style="padding-left: 80px;">
                <div class="col-xs-12">
                    <div class="DIV_24">
                        <div class="DIV_25">
                            <div class="DIV_26">
                                <img src="{{ asset(config('upload.image').'/'.$tour->image) }}" alt="{{ $tour->name }}" class="IMG_27" />
                                <div class="DIV_28">
                                    <div class="DIV_29">
                                        <div class="DIV_30">
                                            <i class="fa fa-clock-o"></i>{{ trans('tour.stay_date_number') }}<span class="SPAN_32">{{ $tour->stay_date_number }}</span>
                                        </div>
                                    </div>
                                    <div class="DIV_33">
                                        ${{ $tour->price }} <span class="SPAN_34">đ</span>
                                    </div>
                                </div>
                                <div class="DIV_35">
                                </div>
                            </div>
                        </div>
                        <div class="DIV_36">
                            <div class="DIV_37">
                                <div class="DIV_38">
                                    <div class="DIV_39">
                                        <h1 class="H1_40">
                                            {{ $tour->name }}
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="DIV_41">
                                <div class="DIV_42">
                                    <div class="DIV_46">
                                        <div class="DIV_47">
                                            {{ trans('tour.ID')}} 
                                        </div>
                                        <div class="DIV_48">
                                            <div>
                                                <input class="form-control" id="idTour" name="idTour1" readonly="readonly" type="text" value="{{ $tour->id }}">
                                            </div>
                                        </div>
                                        <div class="DIV_47">
                                        <i class="fa fa-calendar"></i>
                                            {{ trans('tour.start_at1') }}

                                        </div>
                                        <div class="DIV_48">
                                            {{ $tour->start_at }}
                                        </div>
                                        
                                    </div>

                                    <div class="DIV_52">
                                        <div class="DIV_55">
                                        <i class="fa fa-user"></i>
                                            Số chỗ còn nhận:
                                        </div>
                                        <div class="DIV_56">
                                            <div>
                                                <input class="form-control" id="SlotAgain" name="idTour" readonly="readonly" type="text" value="{{ $div }}">
                                            </div>
                                        </div>
                                        <div class="DIV_47">
                                            <i class="fa fa-plane" style="font-size:24px"></i>
                                            Phuong tien

                                        </div>
                                        <div class="DIV_48">
                                            {{ $tour->transport }}
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="DIV_57">
                                <div class="DIV_58">
                                    <div class="DIV_59">
                                        
                                        <button type="submit" class="btn btn-danger" style=" width: 866px; height: 70px;">
                                        <a href="{{ url('/bookTour/'.$tour->id) }}"></a>
                                         Đặt ngay</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Price information of Tour -->
            
</div>

<!-- chi tiet lich trinh -->
<div class="container" style="padding-left: 75px">
 
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home" ><strong>Chương trình Tour</strong></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1" style="font-weight: 500; font-size: 14"><strong>Chi tiết tour</strong></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2" style="font-weight: 500; font-size: 14"><strong>Bình luận</strong></a>
    </li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <div class="container">               
                    <div class="single-info row mt-40">
                        <div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
                            <div class="info-thumb">
                                <img src="{{ asset(config('upload.image').'/'.$tour->image)}}" href="{{ asset(config('upload.image').'/'.$tour->image)}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 no-padding info-rigth">
                            <div class="info-content">
                                <h2 class="pb-30">{{ $tour->name }}</h2>
                                <p>
                                    {{ trans('home.addresss').$tour->address }}                 
                                </p>
                                <br>
                                <p>
                                    {{ trans('home.tav').$tour->description }}              
                                </p>
                                <br>
                                </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <div class="container">               
                    <div class="single-info row mt-40">
                        <div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
                            <div class="info-thumb">
                                <img src="{{ asset(config('upload.image').'/'.$tour->image)}}" href="{{ asset(config('upload.image').'/'.$tour->image)}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 no-padding info-rigth">
                            <div class="info-content">
                                <h2 class="pb-30">{{ $tour->name }}</h2>
                                <p>
                                    {{ trans('home.addresss').$tour->address }}                 
                                </p>
                                <br>
                                <p>
                                    {{ trans('home.tav').$tour->description }}              
                                </p>
                                <br>
                                </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <div class="container">
          <form action="/action_page.php">
            <div class="form-group">
              <label for="comment">Comment:</label>
              <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

    </div>
  </div>
</div>
<div class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="intro_title text-center">{{ trans('tour.cheapTour') }}</h2>
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
@endsection
@section('js')
<script src="{{ asset('/bower_components/myBootstrap-design/cssBookTour/js/javascript.js') }}">
</script>
@endsection
