<!-- Banner Start <-->
<div class="banner-area margin-bottom-70">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="single-banner">
					<a href="javascript:void(0)"><img alt="" src="public/user/img/banner/1.jpg"></a>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="single-banner">
					<a href="javascript:void(0)"><img alt="" src="public/user/img/banner/4.jpg"></a>
				</div>					
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="single-banner">
					<a href="javascript:void(0)"><img alt="" src="public/user/img/banner/5.jpg"></a>
				</div>			
			</div>
		</div>
	</div>
</div>
<!-- Collection Banner Start -->
<div class="collection-banner fix">
	<div class="overlay padding-150">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1>BỘ SƯU TẬP ĐỘC QUYỀN CHO</h1>
					<h1><a href="javascript:void(0)">MEN</a> - <a href="javascript:void(0)">WOMEN</a> - <a href="javascript:void(0)">BRANDS</a></h1>
				</div>
			</div>
		</div>
	</div>
</div><!-- Collection Banner End -->
<!-- Top Banner Start -->
<div class="top-banner margin-top-70 fix">
	<div class="container">
		<div class="row">
			<div class="top-banner-wrap">
				<div class="col-sm-4 col-xs-12">
					<div class="single-banner fix">
						<img src="public/user/img/add/3.jpg" alt="" />
						<a href="javascript:void(0)"><h2>mens</h2></a>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="single-banner fix">
						<img src="public/user/img/add/2.jpg" alt="" />
						<a href="javascript:void(0)"><h2>womens</h2></a>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="single-banner fix">
						<img src="public/user/img/add/1.jpg" alt="" />
						<a href="javascript:void(0)"><h2>accesories</h2></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- Top Banner End -->
<!-- Propular Product Area Start -->
<div class="propular-product margin-top-70 fix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section-title fix">
					<h2 style="margin-top:5px;">Sản Phẩm Phong Cách</h2>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="propular-slider owl-carousel">
					<!-- Single Tab Product -->
					@foreach ($product_news as $product_new)
					<div class="single-product">
						<div class="pro-image-hover">
							<a href="{{route('chitietsanpham',[$product_new->id,$product_new->alias])}}" class="pro-image">
								<img class="primary" src="{!! asset('public/upload/'.$product_new->image) !!}" alt="" />
							</a>
							<div class="action-buttons">
								<a class="act-btn quick-view" href="#"><i class="fa fa-search"></i></a>
								<a class="act-btn favorite" href="#"><i class="fa fa-heart-o"></i></a>
								<input type="hidden" value="1" name="qty" class="pro-quantity-box">
								<button class="act-btn add-cart add_to_cart" data-toggle="modal" data-target="#myModal" data-id="{!! $product_new->id !!}"><i class="fa fa-shopping-basket"></i></button>
							</div>
						</div>
						<div class="pro-bref fix">
							<a class="pro-name" href="{{route('chitietsanpham',[$product_new->id,$product_new->alias])}}">{{ $product_new->name }}</a>
							<div class="pro-ratting float-left">
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="pro-price float-right">
								@if($product_new->pricesale > 0)
								<span class="old"><?php echo number_format($product_new->price,0,',','.') ?>đ</span>
								<span class="new"><?php echo number_format($product_new->pricesale,0,',','.') ?>đ</span>
								@else
								<span class="new"><?php echo number_format($product_new->price,0,',','.') ?>đ</span>
								@endif
							</div>
						</div>
					</div>
					@endforeach
					<!-- Single Tab Product -->
					
					<!-- Single Tab Product -->
					
					<!-- Single Tab Product -->
					
					<!-- Single Tab Product -->
					
					<!-- Single Tab Product -->
					
					<!-- Single Tab Product -->
					
					<!-- Single Tab Product -->
					
				</div>
			</div>
		</div>
	</div>
</div><!-- Propular Product Area End -->	
<!-- Testimonial Start -->	
<div class="testimonial padding-70 fix">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-xs-12">
				<!-- Testimonial Slider -->		
				<div class="testimonial-slider owl-carousel text-center">
					<!-- Single Testimonial -->
					<div class="sin-testimonial">
						<div class="image fix"><img src="public/user/img/testimonial/1.jpg" alt="" /></div>
						<div class="content fix">
							<p>“Hoặc bạn rất tường tận về thời trang hoặc bạn chẳng hiểu gì về nó cả”</p>
							<h4>Anna Wintour</h4>
							<span>Tổng biên tập tạp chí Vogue Mỹ</span>
						</div>
					</div>
					<div class="sin-testimonial">
						<div class="image fix"><img src="public/user/img/testimonial/3.png" alt="" /></div>
						<div class="content fix">
							<p>“Họ sẽ nhìn bạn chằm chằm, hãy khiến họ được mãn nhãn” </p>
							<h4>Harry Winston  </h4>
							<!--<span>CEO Zackas Fashion</span>-->
						</div>
					</div>
					<div class="sin-testimonial">
						<div class="image fix"><img src="public/user/img/testimonial/2.jpg" alt="" /></div>
						<div class="content fix">
							<p>“Tôi không làm ra thời trang, tôi chính là thời trang”</p>
							<h4>Coco Chanel</h4>
							<!--<span>CEO Zackas Fashion</span>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- Testimonial End -->	
<!-- Blog Area Start -->	
<div class="blog-area margin-70 fix">
	<div class="container">
		<div class="row">
			<!-- Blog Area Title -->	
			<div class="col-xs-12">
				<div class="section-title fix">
					<h2 style="margin-top:5px;">Bài Viết </h2>
				</div>
			</div>
			<div class="col-xs-12">
				<!-- Blog Slider -->	
				<div class="blog-slider owl-carousel">
					<!-- Single Blog -->
					@foreach($blogi as $blog)
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
					@endforeach
					<!-- Single Blog -->
				</div>
			</div>
		</div>
	</div>
</div><!-- Blog Area End -->
<!-- Brands Area Start -->
