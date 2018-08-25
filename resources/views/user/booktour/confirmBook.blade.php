@extends('masterBook')
@section('title', 'Xác nhận đặt Tour')
@section('infoTour')
<div class="row"> 
	<div class="col-md-12" style="height: 400px">
		<h2 style="margin-top: 0px;color: #555555" class="ng-binding">Xác nhận thông tin đặt Tour</h2>
		<h4 style="color:#dd5600;margin-top: 30px;margin-bottom: 20px; 30px;font-weight:600" class="ng-binding">Thông tin người đặt Tour</h4>
		<div class="row" style="border-bottom: 1px solid #ccc">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="height: auto;">
				<div>
					<span class="ng-binding">&nbsp;&nbsp;-  Họ và tên:</span>
					<span class="text-info-ticket ng-binding" style="font-weight: 700">{{ $user->fullname }}</span>
				</div>
				<div>
					<span class="ng-binding">&nbsp;&nbsp;-  Số di động:</span>
					<span class="text-info-ticket ng-binding" style="font-weight: 700">{{ $user->phonenumber }}</span>
				</div>
				<div>
					<span class="ng-binding">&nbsp;&nbsp;-  Email:</span>
					<span class="text-info-ticket ng-binding" style="font-weight: 700">{{ $user->email }}</span>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="height: auto;">
				<div>
					<span class="ng-binding">&nbsp;&nbsp;-  Tour:</span>
					<span class="text-info-ticket ng-binding" style="font-weight: 700">{{ $tour->name }}</span>
				</div>
				<div>
					<span class="ng-binding">&nbsp;&nbsp;-  Ngày bắt đầu:</span>
					<span class="text-info-ticket ng-binding" style="font-weight: 700">{{ $tour->start_at }}</span>
				</div>
				<div>
					<span class="ng-binding">&nbsp;&nbsp;-  Số ngày:</span>
					<span class="text-info-ticket ng-binding" style="font-weight: 700">{{ $tour->stay_date_number }}</span>
				</div>
				<div>
					<span class="ng-binding">&nbsp;&nbsp;-  Phương tiện:</span>
				<span class="text-info-ticket ng-binding" style="font-weight: 700">{{ $tour->transport }}</span>
				</div>
			</div>
		</div>
		<h4 style="color: #dd5600;margin-top: 20px;font-weight: 600" class="ng-binding">Thông tin khách hàng khách hàng đi Tour</h4>
		<div class="content table-responsive table-full-width">
                <table class=" table-hover table-striped" border="1" style="border: 1px solid black !important;" width="90%">
                    <thead>
                        <tr>
                        <!-- {{ trans('tour.ID') }} -->
                        	<th style="padding: 20px;">STT</th>
                            <th>Thong tin khach hang dat tour</th>
                            <th>Gia</th>
                            <th>Thanh tien</th>
                       </tr>
                       <tfoot>
				            <tr >
				                <td colspan="3" style="padding: 20px;">
				                    <span class="pull-right"><strong class="ng-binding">Tổng tiền<!--Tổng tiền--></strong></span>
				                </td>
				                <td class="text-right">
				                    <strong class="ng-binding">{{ $price_total }}</strong>
				                </td>
				            </tr>
        				</tfoot>
                    </thead>
                    <tbody>
                      	@for($i = 0; $i < count($array); $i++)
                        <tr>
                            <td style="padding: 20px;">{{ $i }}</td>
                            <td>
                            	<div>
									<span class="ng-binding">&nbsp;&nbsp;-  Họ và tên:</span>
									<span class="text-info-ticket ng-binding" style="font-weight: 700">{{ $array[$i]['fullname'] }}</span>
								</div>
								<div>
									<span class="ng-binding">&nbsp;&nbsp;-  Đối tượng: </span>
									@if($array[$i]->type  == "0")
		                            	<span class="text-info-ticket ng-binding" style="font-weight: 700">Người lớn</span>
		                            @elseif($array[$i]->type  == "1")
		                            	<span class="text-info-ticket ng-binding" style="font-weight: 700">Trẻ em</span>
		                            @else($array[$i]->type  == "2")
		                            	<span class="text-info-ticket ng-binding" style="font-weight: 700">Trẻ nhỏ</span>
		                            @endif
									
								</div>
								<div>
									<span class="ng-binding">&nbsp;&nbsp;-  Số giấy tờ:</span>
									<span class="text-info-ticket ng-binding" style="font-weight: 700">{{ $array[$i]->cardID }}</span>
								</div>
                            </td>
                            @if($array[$i]->type  == "0")
                            	<td>{{ $tour->price }}</td>
                            	<td>{{ $tour->price }}</td>
                            @elseif($array[$i]->type  == "1")
                            	<td>{{ $tour->priceKid }}</td>
                            	<td>{{ $tour->priceKid }}</td>
                            @else($array[$i]->type  == "2")
                            	<td>{{ $tour->picekidsub }}</td>
                            	<td>{{ $tour->picekidsub }}</td>
                            @endif
                       </tr>
                       @endfor
                   </tbody>
                </table>
            </div>
            <div class="col-md-12">
            	{!! Form::open(['method' => 'GET', 'url' => '/bookTour/'.$tour->id, 'enctype' => 'multipart/form-data']) !!}
            		{!! Form::submit(
            		'<< Nhap Lai',
            		[
            		'class' => 'btn btn-primary',
            		'style' => 'float: left; border-radius: 4px;',
            		]) !!}
                {!! Form::close() !!}
                {!! Form::open(['method' => 'GET', 'url' => '/listBook/'.Auth::user()->id, 'enctype' => 'multipart/form-data']) !!}
            		{!! Form::submit(
            		'xac nhan >>',
            		[
            		'class' => 'btn btn-primary',
            		'style' => 'float: right; border-radius: 4px;',
            		]) !!}
                {!! Form::close() !!}
            </div>
	</div>
</div>
@endsection
@section('js')
<script src="{{ asset('/bower_components/myBootstrap-design/cssBookTour/css/confirmBook.css') }}">
</script>
@endsection