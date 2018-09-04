@extends('masterBook')
@section('title', 'BookTour')
@section('infoTour')
{!! Form::open(['method' => 'PATCH', 'url' => '/confirmBook/'.Auth::user()->id, 'enctype' => 'multipart/form-data']) !!}

    <div class="row">  
            <!--Summary Information of Tour-->
            <div class="row tour-info">
                <div class="col-xs-12">
                    <div class="DIV_24">
                        <div class="DIV_25">
                            <div class="DIV_26">
                                <img src="{{ asset(config('upload.image').'/'.$tour->image) }}" alt="{{ $tour->name }}" class="IMG_27" />
                                <div class="DIV_28">
                                    <div class="DIV_29">
                                        <div class="DIV_30">
                                            <i class="I_31"></i>{{ trans('tour.stay_date_number') }}<span class="SPAN_32">{{ $tour->stay_date_number }}</span>
                                        </div>
                                    </div>
                                    <div class="DIV_33">
                                        {{ $tour->price }} <span class="SPAN_34">đ</span>
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
                                                <input class="form-control" id="idTour" name="idTour" readonly="readonly" type="text" value="{{ $tour->id }}">
                                            </div>
                                        </div>
                                        <div class="DIV_47">
                                            {{ trans('tour.start_at1') }}
                                        </div>
                                        <div class="DIV_48">
                                            {{ $tour->start_at }}
                                        </div>
                                    </div>
                                    <div class="DIV_52">
                                        <div class="DIV_55">
                                            Số chỗ còn nhận:
                                        </div>
                                        <div class="DIV_56">
                                            <div>
                                                <input class="form-control" id="SlotAgain" name="idTour" readonly="readonly" type="text" value="{{ $div }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="DIV_57">
                                <div class="DIV_58">
                                    <div class="DIV_59">
                                         <span class="SPAN_60">Khách nữ từ 55 tuổi trở lên, khách nam từ 60 tuổi trở lên đi tour một mình và khách mang thai trên 4 tháng (16 tuần) vui lòng đăng ký tour trực tiếp tại văn phòng của Vietravel. Không áp dụng đăng ký tour online đối với khách từ 70 tuổi trở lên</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Price information of Tour -->
            <div class="DIV_61">
                <span class="SPAN_62">Giá tour cơ bản</span>
            </div>
            <div class="DIV_63">
                <table class="TABLE_2">
                    <thead class="THEAD_3">
                        <tr class="TR_4">
                            <td class="TD_5">
                            </td>
                            <td class="TD_6">
                                Người lớn (Từ 12 tuổi trở lên)
                            </td>
                            <td class="TD_7">
                                Trẻ em (Từ 2 tuổi đến dưới 12 tuổi)
                            </td>
                            <td class="TD_8">
                                Trẻ nhỏ (Dưới 2 tuổi)
                            </td>
                        </tr>
                    </thead>
                    <tbody class="TBODY_9">
                        <tr class="TR_10">
                            <td class="TD_11">
                                Giá tour cơ bản
                            </td>
                            <td class="TD_12">
                                {{ $tour->price }} <span class="SPAN_13">đ</span>
                            </td>
                            <td class="TD_14">
                                {{ $tour->priceKid }} <span class="SPAN_15">đ</span>
                            </td>
                            <td class="TD_16">
                                {{ $tour->pricekidsub }} <span class="SPAN_17">đ</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--  form nhap thong tin dat tour-->
            
            <div class="col-xs-12" style="background-color: #d8d3d3; height: 700px">
                <div class="row">
                    <div class="col-md-12">
                        <span class="SPAN_42">Thông tin liên lạc</span>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                             
                            <label class="LABEL_3">
                                Họ tên <span class="SPAN_4">*</span>
                            </label>
                            <div class="form-group">
                                <input class="form-control" name="contact_name" type="text" value="{{ Auth::user()->fullname }}" />
                            </div>
                        </div>
                        <div >
                             
                            <label class="LABEL_8">
                                Di động <span class="SPAN_9">*</span>
                            </label>
                            <div class="form-group">
                                <input class="form-control" name="mobilephonfe" type="text" value="{{ Auth::user()->phonenumber }}"/>
                            </div>
                        </div>
                        <div >
                             
                            <label class="LABEL_13">
                                Địa chỉ
                            </label>
                            <div class="form-group">
                                <input class="form-control" name="address" type="text" value="{{ Auth::user()->address }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                             
                            <label class="LABEL_3">
                                Email <span class="SPAN_4">*</span>
                            </label>
                            <div class="form-group">
                                <input class="form-control" name="contact_name" type="text" value="{{ Auth::user()->email }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                             
                            <label class="LABEL_8">
                                Điện thoại <span class="SPAN_9">*</span>
                            </label>
                            <div class="form-group">
                                <input class="form-control" name="mobilephone" type="text" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Người lớn</label>
                                <div>
                                    <input class="form-control" id="adult" name="adult" onblur="javascript:clear_text(this);" onclick="javascript:show_text('Từ 12 tuổi trở lên',this)" onkeypress="funCheckInt()" type="text" value="0">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Trẻ em</label>
                                <div>
                                    <input class="form-control" id="children" name="children" onblur="javascript:clear_text(this);" onclick="javascript:show_text('Từ 2 tuổi đến dưới 12 tuổi',this)" onkeypress="funCheckInt()" type="text" value="0">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>Trẻ nhỏ</label>
                                <div>
                                    <input class="form-control" id="small_children" name="small_children" onblur="javascript:clear_text(this);" onclick="javascript:show_text('Dưới 2 tuổi',this)" onkeypress="funCheckInt()" type="text" value="0">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Số khách</label>
                                <div>
                                    <input class="form-control" id="guests" name="guests" readonly="readonly" type="text" value="0"> 
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ghi chú</label>
                            <div>
                                <textarea class="form-control" cols="20" id="note" name="Note" rows="4"></textarea>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            
        <!-- form hien thi danh sach khach hang di tour -->
        <div id="DanhsachKH">
            <div class="text-center">
                <span class="title" style="text-transform: uppercase;">Danh sách khách hàng đi tour</span>
            </div>
            <div class="row list-form" id="list-form">
                
            </div>
        </div>
        <!-- button book tour -->        
    </div>
{!! Form::submit(
                'Book', 
                [
                'class' => 'btn btn-primary',
                'style' => 'margin-left: 600px'
                ] ) 
                !!}
                {!! Form::close() !!}
@endsection
@section('js')
<script src="{{ asset('/bower_components/myBootstrap-design/cssBookTour/js/javascript.js') }}">
</script>
@endsection
