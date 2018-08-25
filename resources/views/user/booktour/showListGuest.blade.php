
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
                            <input class="form-control fullname" name="[0].fullname" type="text" value="">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <label class="mg-bot5">Giới tính</label>
                        <div>
                            <select class="form-control" name="[0].gender">
                            	<option value="0">Nữ</option>
								<option value="1">Nam</option>
							</select>
                        </div>
                    </div>
                    <div class=" col-md-3 col-sm-3">
                        <label class="mg-bot5">Ngày sinh (<span class="price">*</span>)</label>
                        <div class="ns">
                            <input type="date" class="form-control">
                            
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2 mg-bot10">
                        <label class="mg-bot5">Loại khách</label>
                        <div>
							<select class="form-control" id="personkind0" name="[0].personkind" onchange="ChangeChoose();">
								<option value="0">Nguoi lon</option>
							</select>
                        </div>
        			</div>
       				<div class="col-md-2 col-sm-2 col-xs-2 mg-bot10">
                        <label class="mg-bot5">Phòng đơn</label>
                        <div>
							<select class="form-control" id="loaiphuthuphongdon0" name="[0].loaiphuthuphongdon" onchange="ChangeChoose();">
								<option selected="selected" value="0">Không</option>
								<option value="1">Có</option>
							</select>                            
						</div>
                    </div>
				</div>
                <div class="col-md-12 form-infor">
                	<div class="col-md-3 col-sm-3">
                        <label class="mg-bot5">Quốc tịch:</label>
                        <div>
                            <select class="form-control" id="nationality0" name="[0].nationality" onchange="ChangeNationality(0)">
                            	<option value="VN">Việt Nam</option>
								<option value="GER">Đức</option>
								<option value="HL">Hà Lan</option>
								<option value="HT">Haiti</option>
								<option value="KOR">Hàn Quốc</option>
								<option value="HM">Heard Island and Mcdonald Islands</option>
								<option value="US">Hoa Kỳ</option>
								<option value="USA">Hoa Kỳ</option>
								<option value="HN">Honduras</option>
								<option value="HKG">Hồng Kông</option>
								<option value="HU">Hungary</option>
								<option value="GR">Hy Lạp</option>
								<option value="IS">Iceland</option>
								<option value="INS">Indonesia</option>
								<option value="IRA">Irắc</option>
								<option value="INR">Iran</option>
								<option value="IR">Irăn</option>
								<option value="IQ">IRAQ</option>
								<option value="LAO">Lào</option>
								<option value="NON">-- Khác --</option>
							</select>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <label class="mg-bot5">Số Passport (<span class="price">*</span>)</label>
                        <div>
                            <input class="form-control" name="[0].passport" type="text" value="">
                    	</div>
                	</div>
                    <div class="col-md-3 col-sm-3">
                        <label class="mg-bot5">Ngày hết hạn (<span class="price">*</span>)</label>
                        <div class="ns">        
                            <input data-val="true" data-val-date="The field deadline_date must be a date." id="deadline_date0" name="[0].deadline_date" type="hidden" value="">
                            <div class="date-dropdowns">
                            	<input type="date" class="form-control">
							</div>
                        </div>
                    </div>
            		<div class="col-md-4 col-sm-4 col-xs-4 mg-bot10" id="divPhuthuvisatainhapvn0" style="display:none;">
                        <label class="mg-bot5">Phụ thu visa tái nhập Việt Nam</label>
                        <div>
                            <select class="form-control" id="phuthuvisatainhapvn0" name="[0].phuthuvisatainhapvn" onchange="ChangeChoose();">
                            	<option selected="selected" value="0">Không</option>
								<option value="1">Có</option>
							</select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 form-infor" style="padding-left: 32px;">
                    Trị giá: 
                    <span style="color:#cd2c24;font-weight: bold;font-size: 16px;padding-top: 18px" id="spanprice0"></span>
                    <input class="form-control" disabled="disabled" id="price0" name="price0" type="hidden" value="74990000 đ">
                </div> 
			</div>
		</div>
	</div>
</div>
<br><br><br>