
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Zackas.vn</h4>
      </div>
      <div class="modal-body">
        <p>Thêm vào giỏ hàng công</p>
      </div>
      <div class="modal-footer">
	  	<button type="button" class="btn btn-default"><a href="{!! url('gio-hang') !!}">Gio Hàng</a></button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div class="header">
	<!-- Header Top Start -->
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-xs-12">
					<!-- Header Top Phone and Email -->
					<div class="header-top-left fix">
						<div class="phone">
							<i class="fa fa-phone"></i>
							<span>(000)  123  288  456</span>
						</div>
						<div class="email">
							<i class="fa fa-envelope"></i>
							<a href="#">zackas@company.com</a>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-xs-12">
					<!-- Header Top Social -->
					<div class="header-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>
				<div class="col-md-5 col-xs-12">
					<div class="header-top-right">
						<!-- Header Top Account -->
						<ul class="account">
							<li><a href="{{ url('/admin') }}">My Account</a></li>
						</ul>
						<!-- Header Top Currency -->
						<ul class="currency">
							<ul class="dropdown-menu">
								<li><a href="#">URO</a></li>
								<li><a href="#">GBP</a></li>
							</ul>
							</li>
						</ul>
						<!-- Header Top Language -->
						<ul class="language">
							<li><a href="#" data-toggle="dropdown">English(UK)</a>
							<ul class="dropdown-menu">
								<li><a href="#">French</a></li>
							</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!-- Header Top End -->
	<div class="header-bottom">
		<div class="container">
			<div class="row">
				<div class="header-bottom-top col-sm-12">
					<div class="row">
						<div class="col-md-3 col-lg-4 col-xs-12">
							<!-- Header Logo -->
							<div class="logo"><a href="/"><img src="{!! url('public/user/img/logo.png') !!}" alt="Logo" /></a></div>
						</div>
						<div class="col-md-3 col-xs-12">
						</div>
						<div class="col-md-6 col-lg-5 col-xs-12">
							<!-- Header Search and Cart -->
							<div class="header-search-cart">
								<div class="wrapper">
									<div class="header-search fix">
										<form action="/search" method="get">
										<!--<input type="hidden" name="_token" value="{!! csrf_token() !!}" />-->
											<div class="select-cat">
												<!--<select name="categorys">
													<option value="volvo">All Category</option>
													<option value="saab">Saab</option>
													<option value="fiat">Fiat</option>
													<option value="audi">Audi</option>
												</select>-->
											</div>
											<div class="input-filds">
												<input type="text" name="tukhoa" placeholder="Tìm kiến sản phẩm..."  required/>
												<button class="submit"><i class="fa fa-search"></i></button>
											</div>
										</form>
									</div>
								<!-- Header Cart -->
									<div class="header-cart">
										<a href="{!! url('gio-hang') !!}"><i class="fa fa-shopping-basket"></i><span class="item_cart">{!! Cart::count() !!} Sản phẩm</span></a>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Menu Area Start -->
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-12">
							<!-- Main Menu Start -->
							<div class="main-menu hidden-sm hidden-xs">
								<nav>
									<ul>
										<li><a href="{!! url('/') !!}">Trang chủ</a>
										</li>
										
										<li><a href="{!! url('/san-pham') !!}">SHOP</a>
										</li>
										<?php $menus = DB::table('categories')->select('id','name','alias','prarent_id')->where('prarent_id',0)->orderBy('id','DESC')->get(); ?>
										 @foreach ($menus as $menu)
										<li><a href="{!!route('cateparent',[$menu->id,$menu->alias]) !!}">{!! $menu->name !!}</a>

											<div class="mega-menu">
												<ul>
												<?php $parent = DB::table('categories')->select('id','name','alias','prarent_id')->where('prarent_id',$menu->id)->orderBy('id','DESC')->get(); ?>
												@foreach($parent as $parents)
													<li><a href="{!!route('cateparent',[$parents->id,$menu->alias]) !!}"><?php echo $parents->name ?></a></li>
												@endforeach
												</ul>
												
											</div>
										</li>
										@endforeach
										<li><a href="{!! url('/blog') !!}">BLOG</a></li>
										<li><a href="{!! url('/lien-he') !!}">Liên hệ</a></li>
									</ul>
								</nav>
							</div><!-- Main Menu End -->
							<!-- Mobile Menu Start -->
							<div class="mobile-menu">
								<nav class="hidden">
									<ul>
										<li class="active"><a href="{!! url('/') !!}">HOME</a>
										</li>
										
										<li><a href="{!! url('/san-pham') !!}">SHOP</a>
										</li>
										<?php $menus = DB::table('categories')->select('id','name','alias','prarent_id')->where('prarent_id',0)->orderBy('id','DESC')->get(); ?>
										 @foreach ($menus as $menu)
										<li><a href="{!!route('cateparent',[$menu->id,$menu->alias]) !!}">{!! $menu->name !!}</a>

											<div class="mega-menu">
												<ul>
												<?php $parent = DB::table('categories')->select('id','name','alias','prarent_id')->where('prarent_id',$menu->id)->orderBy('id','DESC')->get(); ?>
												@foreach($parent as $parents)
													<li><a href="{!!route('cateparent',[$parents->id,$menu->alias]) !!}"><?php echo $parents->name ?></a></li>
												@endforeach
												</ul>
												
											</div>
										</li>
										@endforeach
										<li><a href="{!! url('/blog') !!}">BLOG</a></li>
										<li><a href="{!! url('/lien-he') !!}">CONTACT</a></li>
									</ul>
								</nav>
							</div><!-- Mobile Menu End -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>