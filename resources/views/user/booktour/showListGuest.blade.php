@php
    $sum = 0;
@endphp
@if( isset($total))

@for ($i = 1; $i <= $total; $i++)
<div class="col-md-11" style="margin-top: 10px; margin-left: 120px;">
    <div class="title_kh">
        <div>
            Khách hàng 1
        </div>
    </div>
    <div class="form_input">
        <div class="form-horizontal">
            <div class="row mg-bot10 list">
                <div class="col-md-12 form-infor">
                    <div class="col-md-3 col-sm-3">
                        <label class="mg-bot5">Họ tên (<span class="price">*</span>)</label>
                        <div>
                            <input class="form-control fullname" name="fullname[{{$i}}]" type="text" value="">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <label class="mg-bot5">Giới tính</label>
                        <div>
                            <select class="form-control" name="gender[{{$i}}]">
                                <option value="0">Nữ</option>
                                <option value="1">Nam</option>
                            </select>
                        </div>
                    </div>
                    <div class=" col-md-3 col-sm-3">
                        <label class="mg-bot5">Ngày sinh (<span class="price">*</span>)</label>
                        <div class="ns">
                            <input type="date" class="form-control" name="date[{{$i}}]">

                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2 mg-bot10">
                        <label class="mg-bot5">Loại khách</label>
                        <div>
                            <select class="form-control" id="personkind0" name="person[{{$i}}]" onchange="ChangeChoose();">
                                @if($i<=$adult)
                                <option value="0">Người lớn</option>
                                @elseif($i<=($adult+$children))
                                <option value="1">Trẻ Em</option>
                                @else
                                <option value="2">Trẻ Nhỏ</option>
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 form-infor">
                    <div class="col-md-2 col-sm-2">
                        <label class="mg-bot5">Số giấy tờ (<span class="price">*</span>)</label>
                        <div>
                            <input class="form-control" name="cardID" type="text" value="">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <label class="mg-bot5">Ngày hết hạn (<span class="price">*</span>)</label>
                        <div class="ns">
                            <input data-val="true" data-val-date="The field deadline_date must be a date." id="deadline_date0" name="deadline_date[{{$i}}]" type="hidden" value="">
                            <div class="date-dropdowns">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 mg-bot10" id="divPhuthuvisatainhapvn0" style="display:none;">
                        <label class="mg-bot5">Phụ thu visa tái nhập Việt Nam</label>
                        <div>
                            <select class="form-control" id="phuthuvisatainhapvn0" name="phuthuvisatainhapvn[{{$i}}]" onchange="ChangeChoose();">
                                <option selected="selected" value="0">Không</option>
                                <option value="1">Có</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 form-infor" style="padding-left: 32px;">
                    Trị giá:
                    <span style="color:#cd2c24;font-weight: bold;font-size: 16px;padding-top: 18px" id="spanprice0"></span>
                                @php 
                                if($i<=$adult) {
                                    $price = $tour->price; 
                                    $sum = $sum + $tour->price;
                                }                                    
                                else if($i<=($adult+$children)) {
                                    $price = $tour->priceKid;
                                        $sum = $sum + $tour->priceKid;
                                }          
                                else {
                                    $price = $tour->pricekidsub;
                                        $sum = $sum + $tour->pricekidsub;
                                }  
                                @endphp
                                {{ number_format($price, 0) }} <span>VNĐ</span>
                    <input class="form-control" disabled="disabled" id="price0" name="price[{{$i}}]" type="hidden" value="{{ $price }}">
                </div>
            </div>
        </div>
    </div>
</div>
    @if($i == $total)
    <div class="col-xs-12">
                <div style="text-align: left; padding: 10px 15px 10px 15px; background: #ddd">
                    <span style="font-weight: bold; font-size: 14px; margin-right: 10px; text-transform: uppercase">Tổng cộng:</span>
                    <span style="color: #cd2c24; font-weight: bold; font-size: 20px;float:right;" id="spanTotalPrice">
                        <input class="form-control" id="priceSum" name="Sum"  type="text" value="{{ $sum }}" style="margin-top: -6px;">
                    </span>
                </div>
            </div>
    @endif
<br><br><br>
@endfor
@else
<p>binh dz</p>
@endif
