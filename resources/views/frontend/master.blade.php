<!doctype html>
<html class="no-js" lang="">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>@yield('title')</title>
	<meta content="<?php if(isset($keyword)){echo $keyword;} ?>">
	<meta name="keywords" content="<?php if(isset($keyword)){echo $keyword;} ?>">
	<meta name="description" content="<?php if(isset($description)){echo $description;} ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ url('public/user/img/favicon.ico') }}">
	
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,300,600,700,800' rel='stylesheet' type='text/css'>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ url('public/user/css/bootstrap.min.css') }}">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="{{ url('public/user/css/font-awesome.min.css') }}">
	<!-- Mean Menu CSS -->
	<link rel="stylesheet" href="{{ url('public/user/css/meanmenu.min.css') }}">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{ url('public/user/css/owl.carousel.min.css') }}">
	<!-- simpleLens CSS -->
	<link rel="stylesheet" href="{{ url('public/user/css/jquery.simpleLens.css') }}">
	<!-- Price Slider CSS -->
	<link rel="stylesheet" href="{{ url('public/user/css/jquery-price-slider.css') }}">
	<!-- Nivo Slider CSS -->
	<link rel="stylesheet" href="{{ url('public/user/css/nivo-slider.css') }}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{ url('public/user/css/animate.min.css') }}">
	<!-- Hover Effect CSS -->
	<link rel="stylesheet" href="{{ url('public/user/css/hover-effect.css') }}">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ url('public/user/style.css') }}">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="{{ url('public/user/css/responsive.css') }}">
	<!-- Modernizer JS -->
	<script src="{{ url('public/user/js/modernizr-2.8.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('public/user/js/jquery-1.11.3.min.js') }}"></script> 
	<script type="text/javascript"> var base_url = "{{ url('/') }}";</script>
	<script type="text/javascript" src="{{ url('public/user/js/ajax_cart.js') }}"></script>
	<script type="text/javascript" src="{{ url('public/user/js/danh_gia.js') }}"></script>
</head>
<body>
<!-- Header Area Start -->
@include('frontend.blocks.header')
<!-- Header Area End -->
<!-- HOME SLIDER -->
<!-- HOME SLIDER -->
<!-- Service Area Start -->
@yield('content')
<!-- Subscribe Area End -->
<!-- Footer Top Area Start -->
@include('frontend.blocks.footer')
<!-- Footer Bottom End -->

<!-- JS -->

<!-- jQuery JS -->

<!-- Bootstrap JS -->
<script src="{{ url('public/user/js/jquery-1.11.3.min.js') }}"></script>
<script src="{{ url('public/user/js/bootstrap.min.js') }}"></script>
<!-- Nivo Slider JS -->
<script src="{{ url('public/user/js/jquery.nivo.slider.pack.js') }}"></script>
<!-- Mean Menu JS -->
<script src="{{ url('public/user/js/jquery.meanmenu.min.js') }}"></script>
<!-- Owl Carousel JS -->
<script src="{{ url('public/user/js/owl.carousel.min.js') }}"></script>
<!-- ScrollUP JS -->
<script src="{{ url('public/user/js/jquery.scrollup.min.js') }}"></script>
<!-- TreeView JS -->
<script src="{{ url('public/user/js/jquery.treeview.js') }}"></script>
<!-- Price Slider JS -->
<script src="{{ url('public/user/js/jquery-price-slider.js') }}"></script>
<!-- simpleLens JS -->
<script src="{{ url('public/user/js/jquery.simpleLens.min.js') }}"></script>
<!-- Match Height JS -->
<script src="{{ url('public/user/js/jquery.matchHeight-min.js') }}"></script>
<!--scroll-->
<script src="{{ url('public/user/js/jquery.nicescroll.js') }}"></script>
<!-- WOW JS -->
<script src="{{ url('public/user/js/wow.min.js') }}"></script>
<script>
	new WOW().init();
</script>
<!-- Main JS -->
<script src="{{ url('public/user/js/main.js') }}"></script>
<script>
$(document).ready(
  function() { 
    $("html").niceScroll();

	@if (count($errors) > 0)
		$('#myModalfail').modal('show');
	@endif

	$("#myBtn").click(function(){
		$("#myModaltrue").modal('show');
	});

	$("#myBtnSend").click(function(){
		$("#myModalsend").modal('show');
	});

	$("#myBtnSendorder").click(function(){
		$("#myModalsendorder").modal('show');
	});
  }
);

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=230172784053921";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/56c7f3923e63a65d2c2fc149/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
</body>
</html>
