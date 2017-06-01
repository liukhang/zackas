@extends('frontend.master')
@section('title','Blog Zackas.vn')
@section('content')


<div class="page-banner padding-120 fix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Zackas Vietnam | Nơi Chia Sẻ Những Tin Tức Độc Quyền và Thú Vị Về Thời Trang</h1>
			</div>
		</div>
	</div>
</div><!-- Page Banner End -->
<div class="page-breadcrumb fix">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul>
					<li><a href="#">Home</a></li>
					<li><span>Tin Tức</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Blog Area Start -->	
<div class="blog-page page-right-sidebar page margin-70 fix">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-xs-12">
				<div class="row">
                    @foreach($blogi as $blog)
					<div class="col-sm-6 col-xs-12">
						<!-- Single Blog -->
						<div class="single-blog fix">
							<div class="image">
								<a href="{{route('blogdetail',[$blog->id,$blog->alias])}}"><img src="{!! asset('public/upload/tintuc/'.$blog->image) !!}" alt="" /></a>
							</div>
							<div class="content fix">
								<h2><a href="{{route('blogdetail',[$blog->id,$blog->alias])}}">{!! $blog->name !!}</a></h2>
								<p>{!! $blog->intro !!}</p>
							</div>
							<div class="blog-foot fix">
								<a href="{{route('blogdetail',[$blog->id,$blog->alias])}}" class="read-more float-left">Read More</a>
								<span class="blog-date float-right">{{ $blog->created_at->format('d-m-Y') }}</span>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="paginations text-center">
					<ul>
						<li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li>. . . . .</li>
						<li><a href="#">8</a></li>
						<li><a href="#">9</a></li>
						<li><a href="#">10</a></li>
						<li><a href="#">11</a></li>
						<li><a href="#">12</a></li>
						<li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-xs-12">
				<div class="blog-sidebar row">
					<div class="sin-sidebar blog-search-sidebar col-md-12 col-sm-6 col-xs-12 fix">
						<h2>Search</h2>
						<form id="blog-search" action="#">
							<input type="text" placeholder="Search">
							<button class="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<div class="sin-sidebar blog-cat-sidebar col-md-12 col-sm-6 col-xs-12 fix">
						<h2>Category</h2>
						<ul>
							<li><a href="#">Dresses</a></li>
							<li><a href="#">shoes</a></li>
							<li><a href="#">Handbags</a></li>
							<li><a href="#">Clothing</a></li>
						</ul>
					</div>
					<div class="sin-sidebar  blog-recent-sidebar col-md-12 col-sm-6 col-xs-12 fix">
						<h2>Recent Post</h2>
						<ul>
						 @foreach($blogi as $blog)
							<li>
								<a href="{{route('blogdetail',[$blog->id,$blog->alias])}}" class="post-thumb"><img alt="" src="{!! asset('public/upload/tintuc/'.$blog->image) !!}"></a>
								<div class="post-info fix"><a href="{{route('blogdetail',[$blog->id,$blog->alias])}}">{!! $blog->name !!} </a><span>{{ $blog->created_at->format('d-m-Y') }}</span></div>
							</li>
						@endforeach
						</ul>
					</div>
					<div class="sin-sidebar blog-cat-sidebar col-md-12 col-sm-6 col-xs-12 fix">
						<h2>Blog Archives</h2>
						<ul>
							<li><a href="#">January 2016</a></li>
							<li><a href="#">December 2015</a></li>
							<li><a href="#">November 2015</a></li>
							<li><a href="#">September 2015</a></li>
							<li><a href="#">August 2015</a></li>
						</ul>
					</div>
					<div class="sin-sidebar blog-tag-sidebar col-md-12 col-sm-6 col-xs-12 fix">
						<h2>Popular Tags</h2>
						<div class="tags-list">
							<a href="#">Clothing</a>
							<a href="#">accessories</a>
							<a href="#">fashion</a>
							<a href="#">footwear</a>
							<a href="#">good</a>
							<a href="#">kid</a>
							<a href="#">men</a>
							<a href="#">women</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- Blog Area End -->	

@stop