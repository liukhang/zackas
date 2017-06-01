<section class="service-area margin-top-70 fix">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-xs-12">
				<!-- Single Service -->
				<div class="single-service">
					<div class="icon"><i class="fa fa-truck"></i></div>
					<div class="text fix">
						<h4>Miễn Phí Vận Chuyển </h4>
						<p>tất cả các đơn đặt hàng trên 1 triệu</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-xs-12">
				<!-- Single Service -->
				<div class="single-service">
					<div class="icon"><i class="fa fa-repeat"></i></div>
					<div class="text fix">
						<h4>Đổi Trả</h4>
						<p>30 ngày trở lại       </p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-xs-12">
				<!-- Single Service -->
				<div class="single-service">
					<div class="icon"><i class="fa fa-volume-control-phone"></i></div>
					<div class="text fix">
						<h4>Hỗ Trợ Trực Tuyến </h4>
						<p>Luôn luôn hỗ trợ khách hàng 24/7</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- Service Area End -->
<div class="propular-product margin-top-70 fix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section-title fix">
					<h2 style="margin-top:5px;">Sản Phẩm Mới </h2>
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
								@if($product_new->pricesale > 0)
									<a class="act-btn quick-view" href="#" style="color:red">
									-{{ ($product_new->price - $product_new->pricesale)*100/$product_new->price  }}%</a>
									@endif
									
									
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
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Tab Product Area Start -->
<div class="tab-products margin-top-70 fix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<!-- Product Tan List -->
				<ul class="pro-tab-list fix">
					<li class="active"><a href="#new-arrivals" data-toggle="tab">Sản Phẩm Mới </a></li>
					<li><a href="#hot" data-toggle="tab">Sản Phẩm Hot </a></li>
					<li><a href="#sale" data-toggle="tab">Sản Phẩm Giảm Giá </a></li>
				</ul>
			</div>
			<!-- Tab Product Content Container Start -->
			<div class="tab-content tab-products-container">
				<!-- New Arrivals Tab -->
				<div class="tab-pane active" id="new-arrivals">
					<!-- Single Tab Product -->
					@foreach ($product_news as $product_new)
					<div class="col-sm-4 col-md-3 col-xs-12" data-id="{!! $product_new->id !!}">
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
								<a class="pro-name" href="{{route('chitietsanpham',[$product_new->id,$product_new->alias])}}">{!! $product_new->name !!}</a>
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
					</div>
					<!-- end sản phẩm -->
             		@endforeach
				</div>
				<!-- Hot Tab -->
				<div class="tab-pane" id="hot">
					<!-- Single Tab Product -->
					@foreach ($product_banchays as $product_banchay)
					<div class="col-sm-4 col-md-3 col-xs-12" data-id="{!! $product_banchay->id !!}">
						<div class="single-product">
							<div class="pro-image-hover">
								<a href="{{route('chitietsanpham',[$product_banchay->id,$product_banchay->alias])}}" class="pro-image">
									<img class="primary" src="{!! asset('public/upload/'.$product_banchay->image) !!}" alt="" />
								</a>
								<div class="action-buttons">
									<a class="act-btn quick-view" href="#"><i class="fa fa-search"></i></a>
									<a class="act-btn favorite" href="#"><i class="fa fa-heart-o"></i></a>
									<input type="hidden" value="1" name="qty" class="pro-quantity-box">
									<button class="act-btn add-cart add_to_cart" data-toggle="modal" data-target="#myModal" data-id="{!! $product_banchay->id !!}"><i class="fa fa-shopping-basket"></i></button>
								</div>
							</div>
							<div class="pro-bref fix">
								<a class="pro-name" href="{{route('chitietsanpham',[$product_banchay->id,$product_banchay->alias])}}">{!! $product_banchay->name !!}</a>
								<div class="pro-ratting float-left">
									<i class="fa fa-star on"></i>
									<i class="fa fa-star on"></i>
									<i class="fa fa-star on"></i>
									<i class="fa fa-star on"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="pro-price float-right">
								@if($product_banchay->pricesale > 0)
								<span class="old"><?php echo number_format($product_banchay->price,0,',','.') ?>đ</span>
								<span class="new"><?php echo number_format($product_banchay->pricesale,0,',','.') ?>đ</span>
								@else
								<span class="new"><?php echo number_format($product_banchay->price,0,',','.') ?>đ</span>
								@endif
								</div>
							</div>
						</div>
					</div>
					<!-- end sản phẩm -->
             		@endforeach
				</div>
				<!-- Best SALE Product Tab -->
				<div class="tab-pane" id="sale">
					<!-- Single Tab Product -->
					@foreach ($product_sales as $product_sale)
					<div class="col-sm-4 col-md-3 col-xs-12" data-id="{!! $product_sale->id !!}">
						<div class="single-product">
							<div class="pro-image-hover">
								<a href="{{route('chitietsanpham',[$product_sale->id,$product_sale->alias])}}" class="pro-image">
									<img class="primary" src="{!! asset('public/upload/'.$product_sale->image) !!}" alt="" />
								</a>
								<div class="action-buttons">
									<a class="act-btn quick-view" href="#"><i class="fa fa-search"></i></a>
									<a class="act-btn favorite" href="#"><i class="fa fa-heart-o"></i></a>
									<input type="hidden" value="1" name="qty" class="pro-quantity-box">
									<button class="act-btn add-cart add_to_cart" data-toggle="modal" data-target="#myModal" data-id="{!! $product_sale->id !!}"><i class="fa fa-shopping-basket"></i></button>
								</div>
							</div>
							<div class="pro-bref fix">
								<a class="pro-name" href="{{route('chitietsanpham',[$product_sale->id,$product_sale->alias])}}">{!! $product_sale->name !!}</a>
								<div class="pro-ratting float-left">
									<i class="fa fa-star on"></i>
									<i class="fa fa-star on"></i>
									<i class="fa fa-star on"></i>
									<i class="fa fa-star on"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="pro-price float-right">
								@if($product_sale->pricesale > 0)
								<span class="new"><?php echo number_format($product_sale->price,0,',','.') ?>đ</span>
								<span class="old"><?php echo number_format($product_sale->pricesale,0,',','.') ?>đ</span>
								@else
								<span class="new"><?php echo number_format($product_sale->price,0,',','.') ?>đ</span>
								@endif
								</div>
							</div>
						</div>
					</div>
					<!-- end sản phẩm -->
             		@endforeach
				</div>
			</div><!-- Tab Product Content Container End -->
		</div>
	</div>
	<div class="propular-product margin-top-70 fix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section-title fix">
					<h2 style="margin-top:5px;">Sản Phẩm Đánh Giá</h2>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="propular-slider owl-carousel">
					<!-- Single Tab Product -->

					@foreach ($danhgias as $danhgia)
					<div class="single-product">
						<div class="pro-image-hover">
							<a href="{{route('chitietsanpham',[$danhgia->product_id,$danhgia->alias])}}" class="pro-image">
								<img class="primary" src="{!! asset('public/upload/'.$danhgia->image) !!}" alt="" />
							</a>
							<div class="action-buttons">
								<a class="act-btn quick-view" href="#"><i class="fa fa-search"></i></a>
								<a class="act-btn favorite" href="#"><i class="fa fa-heart-o"></i></a>
								<input type="hidden" value="1" name="qty" class="pro-quantity-box">
								<button class="act-btn add-cart add_to_cart" data-toggle="modal" data-target="#myModal" data-id="{!! $danhgia->id !!}"><i class="fa fa-shopping-basket"></i></button>
							</div>
						</div>
						<div class="pro-bref fix">
							<a class="pro-name" href="{{route('chitietsanpham',[$danhgia->product_id,$danhgia->alias])}}">Product Name Demo</a>
							<div class="pro-ratting float-left">
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star on"></i>
								<i class="fa fa-star 
								<?php 
									if($danhgia->numberstar == 4 || $danhgia->numberstar == 5 ){
									$a = 'on';
									echo $a; 
								}else{
									$a = '';
									echo $a;
								}
								?>">
								</i>
								<i class="fa fa-star
								<?php 
									if($danhgia->numberstar == 5){
									$a = 'on';
									echo $a; 
								}else{
									$a = '';
									echo $a;
								}
								?>
								">
								</i>
							</div>

							<div class="pro-price float-right">
								@if($danhgia->pricesale > 0)
								<span class="old"><?php echo number_format($danhgia->price,0,',','.') ?>đ</span>
								<span class="new"><?php echo number_format($danhgia->pricesale,0,',','.') ?>đ</span>
								@else
								<span class="new"><?php echo number_format($danhgia->price,0,',','.') ?>đ</span>
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
</div>
</section><!-- Tab Product Area End -->
