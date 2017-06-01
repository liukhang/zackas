@extends('./frontend.master')
@section('title','404 Zackas.vn')
@section('content')
<div class="error-404 fix">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>404</h1>
				<h3>ops! page not found</h3>
				<p>Sorry, but the page you are looking for is not found <br /> Please make sure that you have typed the currect URL</p>
				<a href="{!! url('/') !!}">back to home page</a>
			</div>
		</div>
	</div>
</div><!-- 404 Page End -->
@stop