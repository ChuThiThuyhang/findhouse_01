<div class="row">
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
		<div class="row" style="padding-left: 50px">
		<div class="content table-responsive table-full-width" style="border-bottom: 1px solid #ccc">
            <table class="table" style="margin-left: -60px; width: 100%">
			  <thead class="thead-dark">
			    <tr>
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
			                <strong class="ng-binding">{{ $book->price_total }}</strong>
			            </td>
			        </tr>
				</tfoot>
			  </thead>
			  <tbody>
			  @for($i = 0; $i < count($array); $i++)
			    <tr>
			      <!-- <th scope="row">1</th> -->
			      <td>{{ $i }}</td>
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
        </div>


