@extends('frontend.master')
@section('title','Blog Zackas.vn')
@section('content')

<!-- Page Banner Start -->
<div class="page-banner padding-120 fix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Chi tiết bài viết</h1>
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
					<li><span>Chi tiết bài viế</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Blog Area Start -->	
<div class="blog-details-page page-left-sidebar page margin-70 fix">
	<div class="container">
		<div class="row">
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
						<?php
						$blogi =  DB::table('tintucs')->orderBy('id','DESC')->get();
						?>
						
						 @foreach($blogi as $blog)
							<li>
								<a href="{{route('blogdetail',[$blog->id,$blog->alias])}}" class="post-thumb"><img alt="" src="{!! asset('public/upload/tintuc/'.$blog->image) !!}"></a>
								<div class="post-info fix"><a href="{{route('blogdetail',[$blog->id,$blog->alias])}}">{!! $blog->name !!} </a><span>{{ date('d-m-Y', strtotime($blog->created_at)) }}</span></div>
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
			<div class="col-md-9 col-xs-12">
				<div class="sin-blog-post">
					<div class="post-thumbnail"><img alt="" src="{!! asset('public/upload/tintuc/'.$blogdetail->image) !!}"></div>
					<div class="post-info-wrapper fix">
						<h1 class="post-title">{!! $blogdetail->name !!}</h1>
						<div class="post-meta fix">
							<span>by <a href="#">admin</a></span>
							<span>{{ $blogdetail->created_at->format('d-m-Y') }}</span>
							<span><a href="#">3 Comment</a></span>
						</div>
						<div class="postsummary">
							<p>{!! $blogdetail->content !!}</p>
						</div>
						<div class="post-share fix">
							<h3>Share this post</h3>
							<ul>
								<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="comment-wrapper fix">
						<div class="comments">
							<h2> Comments</h2>
							<div class="fb-comments" data-href="https://demo.vn/{!! $blogdetail->name !!}/docs/plugins/comments#configurator" data-numposts="5" data-width="100%"></div>

						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- Blog Area End -->	
@stop