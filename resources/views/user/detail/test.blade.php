<!DOCTYPE html5>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.imgId:hover
		{
			cursor: pointer;
			opacity: 0.3;
		}

		img
		{
			border: 1px solid #777fff;
		}

		body
		{
			margin: 0;
		}

		#wrapper
		{
			width: 100%;
			margin: 0 auto;
			background: #eee
		}

		#slidebar
		{
			width: 30%;
			float: left;
			margin-right: 10px;
			margin-left: 10px;
		}
		#content
		{
			width: 50%;
			float: left;
			margin-left: 400px;
		}

		ul
		{
			list-style: none;
		}

		ul a
		{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<div id="content">
			{!! Form::open(array('url'=>'/test', 'files'=>true, 'method'=>'post', 'id'=>'imageImage', 'name'=>'saveImage')) !!}
			<label for="imgInp" class="clone">
				{!! Html::image('anhmoi.jpg', 'upload photo', array('class' => 'image_rounded imgId', 'id' => 'imgId', 'width' => '400px', 'height' => '280px' ))!!}
			</label>
			{!! Form::hidden('pathPhoto', null, array('class' => 'pathPhoto', 'id' => 'pathPhoto')) !!}
			{!! Form::file('image_path', array('style'=>'display:none', 'id' => 'imgInp', 'accept' => 'image/x-png, image/jpeg')) !!}
			{!! Form::hidden('_token', csrf_token()) !!}
			<br>
			{!! Form::submit('save') !!}
			{!! Form::close() !!}
		</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-1.12.0.js"></script>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
	function readURL(input,img)
	{
		if(input.files && input.files[0])
		{
			var reader = new FileReader();

			reader.onload = function (e)
			{
				$(img).attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	};

	function browserURL(path,path2)
	{
		console.log(path2);
		$(path).change(function()
		{
			readURL(this,path2);
		});
	};
	
	browserURL("#imgInp","#imgId");
</script>
</html>
