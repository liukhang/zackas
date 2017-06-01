<div class="slider-wrap">
	<div id="mainSlider" class="nivoSlider slider-image">
		@foreach($banner as $banners)
		<img src="{!! asset('public/upload/banner/'.$banners["image"]) !!}" alt="main slider" title="#{!! $banners->name !!}"/>
		@endforeach
	</div>
	<div id="{!! $banner1->name !!}" class="nivo-html-caption">
		<div class="slider-progress"></div>					
		<div class="slide-text-right text-black slide-text">
			<div class="middle-text text-center">
				<h3 class="cap-sub-title wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">new collection</h3>
				<h1 class="cap-title wow flipInX" data-wow-duration=".9s" data-wow-delay="1.5s">Women’s Fashion</h1>
				<h2 class="cap-dec wow rotateInUpRight" data-wow-duration="0.9s" data-wow-delay="2.2s">Save Up To 40% Off</h2>
				<a href="{!! url('/danh-muc/12/women') !!}" class="cap-readmore wow bounceIn" data-wow-duration="0.9s" data-wow-delay="3s">Shop Now</a>
			</div>										
		</div>
	</div>
	<div id="{!! $banner2->name !!}" class="nivo-html-caption">
		<div class="slider-progress"></div>							
		<div class="slide-text-left text-white slide-text">
			<div class="middle-text text-center">
				<h3 class="cap-sub-title wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s">new collection</h3>
				<h1 class="cap-title wow lightSpeedIn" data-wow-duration=".9s" data-wow-delay="1.5s">Men’s Fashion</h1>
				<h2 class="cap-dec wow rollIn" data-wow-duration="0.9s" data-wow-delay="2.2s">Save Up To 40% Off</h2>
				<a href="danh-muc/12/men" class="cap-readmore wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="3s">Shop Now</a>
			</div>	
		</div>						
	</div>

</div>