@extends('app')

@section('content')

	<div class="main-w3layouts wrapper">
		<h1>Magical Zackas.vn Login </h1>
		<div class="main-agileinfo">
			<div class="agileits-top"> 
				@if (count($errors) > 0)
					<div class="alert alert-danger" style="color:white">
						<strong style="color:white">Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li style="color:white">{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<form method="POST" action="{{ url('/auth/login') }}"> 
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input class="text" type="text" name="username" value="{{ old('username') }}" placeholder="Username" >
					<input class="text" type="password" name="password" placeholder="Password" >
					<div class="wthree-text"> 
						<ul> 
							<li>
								<label class="anim">
									<input type="checkbox" class="checkbox">
									<span> Remember me ?</span> 
								</label> 
							</li>
							<li><a href="#">Forgot password?</a> </li>
						</ul>
						<div class="clear"> </div>
					</div>   
					<input type="submit" value="LOGIN">
				</form>
				<p>Don't have an Account? <a href="#"> Signup Now!</a></p>
			</div>	 
		</div>
@endsection
