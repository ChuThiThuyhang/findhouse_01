@extends("masterAuth")
@section("content")
<div class="main-w3layouts wrapper">
	<h1>Bubble SignUp Form</h1>
	<div class="main-agileinfo">
		<div class="agileits-top"> 
			@if (session()->has('flash_notification.error')) <div class="alert alert-success">{!! session('flash_notification.error') !!}</div>
			@endif
			<form action="{{ url('login') }}" method="post"> 
				{!! csrf_field() !!}
				<input class="text email" value="{{ old('email') }}" type="email" name="email" placeholder="Email" >
				<input class="text w3lpass" value="{{ old('password') }}" type="password" name="password" placeholder="Password" >
				<input type="submit" value="LOGIN">
			</form>
			<p>Don't have an Account? <a href="{{ url('/register') }}"> Register Now!</a></p>
		</div>	 
	</div>	
	<!-- copyright -->
	<div class="w3copyright-agile">
		<p>© 2017 Bubble SignUp Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
	</div>
	<!-- //copyright -->
	<ul class="w3lsg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
@endsection