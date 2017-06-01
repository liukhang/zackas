<div id="myModalfail" class="modal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Zackas.vn</h4>
      </div>
      <div class="modal-body">
        <p style="color:red">Không thành công vui lòng nhập đầy đủ thông tin.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="myModaltrue" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Zackas.vn</h4>
      </div>
      <div class="modal-body">
        <p>Thank you for following us</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div class="brands-area padding-70 fix">
	<div class="container">
		<div class="row">
			<!-- Brands Area Title -->	
			<div class="col-xs-12">
				<div class="section-title fix">
					<h2 style="margin-top:5px;">Thương Hiệu Nổi Bật</h2>
				</div>
			</div>
			<div class="col-xs-12">
				<!-- Brands Slider -->	
				<div class="brand-slider owl-carousel">
					<!-- Single Brand -->
					<div class="single-brand">
						<img src="{{ url('public/user/img/brands/1.png') }}" alt="" />
					</div>
					<!-- Single Brand -->
					<div class="single-brand">
						<img src="{{ url('public/user/img/brands/2.png') }}" alt="" />
					</div>
					<!-- Single Brand -->
					<div class="single-brand">
						<img src="{{ url('public/user/img/brands/3.png') }}" alt="" />
					</div>
					<!-- Single Brand -->
					<div class="single-brand">
						<img src="{{ url('public/user/img/brands/4.png') }}" alt="" />
					</div>
					<!-- Single Brand -->
					<div class="single-brand">
						<img src="{{ url('public/user/img/brands/5.png') }}" alt="" />
					</div>
					<!-- Single Brand -->
					<div class="single-brand">
						<img src="{{ url('public/user/img/brands/6.png') }}" alt="" />
					</div>
					<!-- Single Brand -->
					<div class="single-brand">
						<img src="{{ url('public/user/img/brands/7.png') }}" alt="" />
					</div>
					<!-- Single Brand -->
					<div class="single-brand">
						<img src="{{ url('public/user/img/brands/8.png') }}" alt="" />
					</div>
					<!-- Single Brand -->
					<div class="single-brand">
						<img src="{{ url('public/user/img/brands/9.png') }}" alt="" />
					</div>
					<!-- Single Brand -->
					<div class="single-brand">
						<img src="{{ url('public/user/img/brands/10.pn') }}g" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- Brands Area End -->
<!-- Subscribe Area Start -->
<div class="subscribe-social">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<div class="footer-subscribe">
					<form action="{!!url('subscrice') !!}" method="post">
					 <input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="input-box">
							<input type="hidden" value="subscrice" name="name">
							<input type="hidden" value="Đây là email đã đăng kí theo dõi.done" name="content">
						   <input type="text" placeholder="Your Email" name="email">
						</div>
						<div class="help-block with-errors" style="color: red;"><?php echo $errors->first('email'); ?></div>
						<div class="actions">
							<input id="myBtn" type="submit" value="Subscribe"/>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="social-footer">
					<ul class="link-follow">
						<li><a class="twitter fa fa-twitter" href="#"></a></li>
						<li><a class="google fa fa-google-plus" href="#"></a></li>
						<li><a class="facebook fa fa-facebook" href="#"></a></li>
						<li><a class="linkedin fa fa-linkedin" href="#"></a></li>
						<li><a class="youtube fa fa-youtube" href="#"></a></li>
						<li><a class="vimeo-square fa fa-vimeo-square" href="#"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer-top padding-70 fix">
	<div class="container">
		<div class="row">
			<div class="footer-column col-sm-6 col-md-3 col-xs-12">
				<a href="#" class="logo-footer"><img src="{{ url('public/user/img/footer-logo.png') }}" alt=""></a>
				<div class="footer-content">
					<p>Thời trang trực tuyến hàng đầu Châu Á - Nơi bạn tìm thấy những phong cách và thương hiệu mới nhất!</p>
					<a href="#">Và nhiều hơn thế nữa ...  &gt;&gt;</a>
				</div>
			</div>
			<div class="footer-column col-sm-6 col-md-3 col-xs-12">
				<div class="footer-title">
					<h3>DỊCH VỤ KHÁCH HÀNG</h3>
				</div>
				<div class="footer-content">
					<ul>
						<li><a href="{{ url('/lien-he') }}">Sitemap</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Advanced Search</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="{{ url('/lien-he') }}">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-column col-sm-6 col-md-3 col-xs-12">
				<div class="footer-title">
					<h3>Thanh toán  &amp; Vận chuyển</h3>
				</div>
				<div class="footer-content">
					<ul>
						<li><a href="#">Product Recall</a></li>
						<li><a href="#">Gift Vouchers</a></li>
						<li><a href="#">Returns and Exchanges</a></li>
						<li><a href="#">Shipping Options</a></li>
						<li><a href="#">Gift Vouchers</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-column col-sm-6 col-md-3 col-xs-12">
				<div class="footer-title">
					<h3>LIÊN HỆ</h3>
				</div>
				<div class="footer-content">
					<div class="footer-contact">
						<p class="adress"><i class="fa fa-map-marker"></i><span>Addresss:</span>108 Trần Hưng Đạo, Hà Nội.</p>
						<p class="email"><i class="fa fa-envelope"></i><span>Email:</span> admin@zackas.vn</p>
						<p class="phone"><i class="fa fa-phone"></i><span>Phone: +8801737803547</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer Top Area End -->
<!-- Footer Bottom Start -->
<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<!-- Footer Copyright -->
				<div class="copy-right">
					<p>&copy; 2017 <a href="http://zackas.vn/">Zackas.vn</a>, All Right Reserved</p>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<!-- Footer Payment -->
				<div class="payment">
					<a href="#"><img src="{{ url('public/user/img/payment/1.png') }}" alt="" /></a>
					<a href="#"><img src="{{ url('public/user/img/payment/2.png') }}" alt="" /></a>
					<a href="#"><img src="{{ url('public/user/img/payment/3.png') }}" alt="" /></a>
					<a href="#"><img src="{{ url('public/user/img/payment/4.png') }}" alt="" /></a>
					<a href="#"><img src="{{ url('public/user/img/payment/5.png') }}" alt="" /></a>
				</div>
			</div>
		</div>
	</div>
</div>
