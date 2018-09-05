@extends('baleAccount')
@section('title','Account')
@section('content')
    @if (Auth::check())
        <div class="container" style="padding-top: 35px">

        <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home">
                    <i class="fa fa-user" aria-hidden="true"></i>
                  About me</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu1">
                    <i class="fa fa-user" aria-hidden="true"></i>
                  Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu2">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                  Account Setting</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu3">
                    <i class="fa fa-cube" aria-hidden="true"></i>
                  Booking</a>
                </li>
                </ul>

        <!-- Tab panes -->
                <div class="tab-content">
                    <div id="home" class="container tab-pane active">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="panel widget light-widget panel-bd-top">
                                    <div class="panel-body">
                                        <div>
                                            <div class="text-center vd_info-parent"> 
                                                <img alt="avatar" src="{{ asset(config('upload.image').'/'.Auth::user()->image) }}" style="width: 350px; height: 300px;">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-9" style="background-color: green">
                                <p>
                                    Du lịch trong nước luôn là lựa chọn tuyệt vời. Đường bờ biển dài hơn 3260km, những khu bảo tồn thiên nhiên tuyệt vời, những thành phố nhộn nhịp, những di tích lịch sử hào hùng, nền văn hóa độc đáo và hấp dẫn, cùng một danh sách dài những món ăn ngon nhất thế giới, Việt Nam có tất cả những điều đó. Với lịch trình dày, khởi hành đúng thời gian cam kết, Vietravel là công ty lữ hành uy tín nhất hiện nay tại Việt Nam, luôn sẵn sàng phục vụ du khách mọi lúc, mọi nơi, đảm bảo tính chuyên nghiệp và chất lượng dịch vụ tốt nhất thị trường!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="container tab-pane fade">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="panel widget light-widget panel-bd-top">
                                    <div class="panel-body">
                                        <div>
                                            <div class="text-center vd_info-parent"> 
                                                <img alt="avatar" src="{{ asset(config('upload.image').'/'.Auth::user()->image) }}" style="width: 250px; height: 200px;">
                                                <a href="" id="mask" class="btn btn-info btn-lg" data-toggle="modal" data-target="#changeAvatar">
                                                    <i class="fa fa-camera" aria-hidden="true"></i><span> Change Avatar</span>
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h2>{{ Auth::user()->username }}</h2>
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="row mgbt-xs-0">
                                            <label class=".col-6 .col-sm-4" style="width: 50%; font-weight: 700; font-size: 18px;">
                                                <strong style="color:black">Name: </strong>
                                            </label>
                                            <div class=".col-8 .col-sm-4" style="width: 50%; font-weight: 700; font-size: 18px;">
                                                <p style="color:black">
                                                    {{ Auth::user()->fullname }}
                                                </p>
                                            </div>
                                          <!-- col-sm-10 --> 
                                        </div>
                                        <div class="row mgbt-xs-0">
                                            <label class=".col-6 .col-sm-4" style="width: 50%; font-weight: 700; font-size: 18px;">
                                                <strong style="color:black">Email: </strong>
                                            </label>
                                            <div class=".col-8 .col-sm-4" style="width: 50%; font-weight: 700; font-size: 18px;">
                                                <p style="color:black">
                                                    {{ Auth::user()->email }}
                                                </p>
                                            </div>
                                          <!-- col-sm-10 --> 
                                        </div>
                                        <div class="row mgbt-xs-0">
                                            <label class=".col-6 .col-sm-4" style="width: 50%; font-weight: 700; font-size: 18px;">
                                                <strong style="color:black">Address: </strong>
                                            </label>
                                            <div class=".col-8 .col-sm-4" style="width: 50%; font-weight: 700; font-size: 18px;">
                                                <p style="color:black">
                                                    {{ Auth::user()->address }}
                                                </p>
                                            </div>
                                          <!-- col-sm-10 --> 
                                        </div>
                                        <div class="row mgbt-xs-0">
                                            <label class=".col-6 .col-sm-4" style="width: 50%; font-weight: 700; font-size: 18px;">
                                                <strong style="color:black">PhoneNumber: </strong>
                                            </label>
                                            <div class=".col-8 .col-sm-4" style="width: 50%; font-weight: 700; font-size: 18px;">
                                                <p style="color:black">
                                                    {{ Auth::user()->phonenumber }}
                                                </p>
                                            </div>
                                          <!-- col-sm-10 --> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class="container tab-pane fade">
                        <div class="container">
                            <h1>Edit Profile</h1>
                            <hr>
                            {!! Form::open(['method' => 'POST', 'url' => '/editInfoUser/'.Auth::user()->id, 'enctype' => 'multipart/form-data']) !!}
                                <div class="row">
                              <!-- left column -->
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <label for="imgInp" class="clone">
                                            {!! Html::image(asset(config('upload.image').'/'.Auth::user()->image), 'upload photo', array('class' => 'image_rounded imgId', 'id' => 'imgId', 'width' => '250px', 'height' => '280px' )) !!}
                                        </label>
                                        {!! Form::hidden('pathPhoto', null, array('class' => 'pathPhoto', 'id' => 'pathPhoto')) !!}
                                        {!! Form::file('image_path', array('id' => 'imgInp', 'accept' => 'image/x-png, image/jpeg')) !!}
                                    </div>
                                </div>
                                
                              <!-- edit form column -->
                              <div class="col-md-9 personal-info">
                                
                                <h3>Personal info</h3>
                                
                                <div class="form-group row">
                                  <label for="example-search-input" class="col-2 col-form-label" style="color: black">
                                      <strong>
                                          Name
                                      </strong>
                                  </label>
                                  <div class="col-10">
                                    <input class="form-control" type="text" value="{{ Auth::user()->fullname }}" name="fullname" id="example-text-input" style="color:black; border: 1px solid #ccc !important; border-radius: 4px !important;">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="example-search-input" class="col-2 col-form-label" style="color: black">
                                      <strong>
                                          Email
                                      </strong>
                                  </label>
                                  <div class="col-10">
                                    <input class="form-control" type="text" value="{{ Auth::user()->email }}" name="email" id="example-text-input" style="color:black; border: 1px solid #ccc !important; border-radius: 4px !important;">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="example-search-input" class="col-2 col-form-label" style="color: black">
                                      <strong>
                                          Address
                                      </strong>
                                  </label>
                                  <div class="col-10">
                                    <input class="form-control" type="text" value="{{ Auth::user()->address }}" name="address" id="example-text-input" style="color:black; border: 1px solid #ccc !important; border-radius: 4px !important;">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="example-search-input" class="col-2 col-form-label" style="color: black">
                                      <strong>
                                          phonenumber
                                      </strong>
                                  </label>
                                  <div class="col-10">
                                    <input class="form-control" type="text" value="{{ Auth::user()->phonenumber }}" name="phonenumber" id="example-text-input" style="color:black; border: 1px solid #ccc !important; border-radius: 4px !important;">
                                  </div>
                                </div>
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-secondary" style="border-radius: 4px !important">Save</button>
                                </div>
                                
                                </div>
                                
                            viewAccount    </div>
                            </div>
                        
                        {!! Form::close() !!} 
                            <hr>
                    </div>
                <div id="menu3" class="container tab-pane fade">
                    <h3 style="text-align: center;">Thong tin tour da dat</h3>
                    <table class="table" id="booking">
                      <thead class="thead-light">
                        <tr>
                            <th scope="col" style="color: black; font-weight: 700">STT</th>
                            <th scope="col" style="color: black; font-weight: 700">Mã Booking</th>
                            <th scope="col" style="color: black; font-weight: 700">Tên Tour</th>
                            <th scope="col" style="color: black; font-weight: 700">Ngày đặt</th>
                            <th scope="col" style="color: black; font-weight: 700">Tổng giá</th>
                            <th scope="col" style="color: black; font-weight: 700"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @for($i = 0; $i < count($array); $i++)
                            
                                <tr id="row{{ $i }}">
                                    <td scope="row" style="color: black; font-weight: 600">{{ $i }}</td>
                                    <td>
                                        <input class="form-control input{{ $i }}" id="idBook" name="idBook" readonly="readonly" type="text" value="{{ $array[$i][0]['bookid'] }}" style="color: black; font-weight: 600">
                                    </td>
                                    <td style="color: black; font-weight: 600">{{ $array[$i][1]['name'] }}</td>
                                    <td style="color: black; font-weight: 600">{{ $array[$i][0]['created_at'] }}</td>
                                    <td style="color: black; font-weight: 600">{{ $array[$i][0]['price_total'] }}</td>
                                    <td style="color: black; font-weight: 600">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="border-radius: 4px !important; font-weight: 600; color: black;" onclick="showDetail({{$i}})" value="{{ $i }}" id="btn">
                                            Chi tiết
                                        </button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document" id="exampleModal1" style="background-color: #ffff; width: 100%">

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                           
                        @endfor
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <div class="container" style="padding-top: 35px">
            <h1 style="padding-top: 100px; color: black;">
                
                <span class="oi oi-arrow-circle-right"></span>
                <a href="{{ url('/login') }}">Mời bạn đăng nhập</a>
            </h1>
        </div>
    @endif
@endsection
@section('js')
<script> 
    function showDetail(i)
    {
        var id = parseInt($(".input"+i).val());
        //lay gia tri booking_id
        $.ajax({
            url: "/showDetailBook" ,
            type: "get",
            dataType: "json",
            data: { 
                bookID: id
            },
            success: function (response){ 

    
                $("#exampleModal1").empty();
                // // Hiển thị kết quả tìm kiếm
                $("#exampleModal1").append(response.html);
            },
            error: function (error){
                console.log('that bai');
            }   
        });
    }
</script>
@endsection