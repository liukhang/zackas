@extends('frontend.master')
@section('title',$data->name)
@section('content')
   <!-- end header -->
<!-- Page Banner Start -->
<div id="myModalfail1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Zackas.vn</h4>
      </div>
      <div class="modal-body">
        <p>Tên không được bỏ trống</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="myModalfail2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Zackas.vn</h4>
      </div>
      <div class="modal-body">
        <p>Email không được bỏ trống</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="myModalfail3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Zackas.vn</h4>
      </div>
      <div class="modal-body">
        <p>Email không hợp lệ</p>
      </div>
      <div class="modal-footer">
	  	
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="myModalfail4" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Zackas.vn</h4>
      </div>
      <div class="modal-body">
        <p>Nội dung không được bỏ trống</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="myModalfail5" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Zackas.vn</h4>
      </div>
      <div class="modal-body">
        <p>Cám ơn bạn đã đánh giá sản phẩm của zackas.vn</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="page-banner padding-120 fix">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>Chi Tiết Sản Phẩm </h1>
      </div>
    </div>
  </div>
</div><!-- Page Banner End -->
<div class="page-breadcrumb fix">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ul>
          <li><a href="#">shop</a></li>
          <li><span>chi tiết sản phẩm </span></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- About Page Start -->
<div class="single-product-page page margin-top-70 fix">
  <div class="container">
    <div class="row">
      <div class="single-product-wrapper margin-bottom-70 fix">
          <div class="col-md-6 col-xs-12">
            <div class="product-image">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="view-1">
                  <div class="simpleLens-big-image-container">
                    <a class="simpleLens-lens-image" data-lens-image="{!! asset('public/upload/'.$data->image) !!}">
                      <img src="{!! asset('public/upload/'.$data->image) !!}" alt="" class="simpleLens-big-image">
                    </a>
                  </div>
                </div>
                <?php $images = DB::table('product_images')->select('image','id')->where('product_id',$data->id)->orderBy('id','DESC')->limit(2)->get(); ?>
                @foreach($images as $image)
                <div role="tabpanel" class="tab-pane" id="{!!$image->id!!}">
                  <div class="simpleLens-big-image-container">

                    <a class="simpleLens-lens-image" data-lens-image="{!! asset('public/upload/images_detail/'.$image->image) !!}">
                      <img src="{!! asset('public/upload/images_detail/'.$image->image) !!}" alt="" class="simpleLens-big-image">
                    </a>
                    
                  </div>
                </div>
                @endforeach
                <div role="tabpanel" class="tab-pane" id="view-3">
                  <div class="simpleLens-big-image-container">
                    <a class="simpleLens-lens-image" data-lens-image="{!! asset('public/upload/'.$data->image) !!}">
                      <img src="{!! asset('public/upload/'.$data->image) !!}" alt="" class="simpleLens-big-image">
                    </a>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs" role="tablist">
                <li class="active">
                  <a href="#view-1" data-toggle="tab"><img src="{!! asset('public/upload/'.$data->image) !!}" alt="" /></a>
                </li>
                <?php $images = DB::table('product_images')->select('image','id')->where('product_id',$data->id)->orderBy('id','DESC')->limit(2)->get(); ?>
                @foreach($images as $image)
                <li>
                <a href="{!!'#'.$image->id!!}" data-toggle="tab"><img src="{!! asset('public/upload/images_detail/'.$image->image) !!}" alt="" /></a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        <div class="col-md-6 col-xs-12 fix">
          <div class="single-pro-title fix">
            <div class="name-price">
              <h2 class="single-pro-name">{!! $data->name !!}</h2>
              <p class="single-pro-price">
              @if($data->pricesale > 0)
                <span class="old"><?php echo number_format($data->price,0,',','.')?>đ </span>
                <span class="new"><?php echo number_format($data->pricesale,0,',','.')?>đ </span>
              @else
                <span class="new"><?php echo number_format($data->price,0,',','.')?>đ </span>
              @endif 
              </p>
            </div>
            <div class="ratting-review">
              <div class="ratting">
                <i class="fa fa-star on"></i>
                <i class="fa fa-star on"></i>
                <i class="fa fa-star on"></i>
                <i class="fa fa-star on"></i>
                <i class="fa fa-star "></i>
              </div>
              <p class="review-count">4 Review</p>
            </div>
          </div>
          <div class="pro-description fix">
            <h3>description</h3>
            <p>{!! $data->intro!!}.</p>
          </div>
          <div class="pro-actions fix">
            <div class="pro-quantity float-left">
              <input type="text" value="1" name="qty" class="pro-quantity-box">
            </div>
              <button class="act-btn add-cart add_to_cart" data-toggle="modal" data-target="#myModal" data-id="{!! $data->id !!}"><i class="fa fa-shopping-basket"></i> add to cart</button>
              <a href="#" class="act-btn favorite"><i class="fa fa-heart-o"></i></a>
          </div>
        </div>
      </div>
      <div class="comment-wrapper fix">
						<div class="comments">
							<h2> Comments</h2>
							<div class="fb-comments" data-href="https://demo.vn/{!! $data->name !!}/docs/plugins/comments#configurator" data-numposts="5" data-width="100%"></div>
						</div>					
					</div>
      <div class="sin-pro-tab col-xs-12 margin-bottom-70">
        <ul class="sin-pro-tab-list">
          <li class="active"><a data-toggle="tab" href="#pro-des">Product Description</a></li>
          <li class=""><a data-toggle="tab" href="#pro-reviews">Reviews</a></li>
        </ul>
        <div class="sin-pro-tab-container tab-content fix">
          <div class="tab-pane active" id="pro-des">
            <p>{!! $data->content !!} </p>
          </div>
          <div class="tab-pane" id="pro-reviews">
              <ul>
                <?php $danhgia = DB::table('danhgias')->where('product_id',$data->id)->get(); ?>
                @foreach($danhgia as $list_danhgia)
                <li style="padding:5px"><strong>{!! $list_danhgia->name !!}</strong> đã cho <span style="color:red">{!! $list_danhgia->numberstar !!}</span><i class="fa fa-star on" style="color:#FEC42D"></i>
                  <ul>
                    <li style="padding-top:8px">{!! $list_danhgia->content !!}</li>
                  </ul>
                </li>
                @endforeach
                </br>
                <div style="font-size:20px">Tổng số sao: <span style="color:red">
                  <?php 
                    $avg = DB::table('danhgias')->where('product_id',$data->id)->avg('numberstar');
                    echo ceil($avg);
                  ?>
                </span><i class="fa fa-star on" style="color:#FEC42D"></i>
                </div></br>
              </ul>
              <!-- -->
              <div id="star-liukhang">
                <form action="" id="contact" method="post">
                  <p class="clasificacion">
                    <input id="radio1" type="radio" name="danhgia" value="5">
                    <label for="radio1">&#9733;</label>
                    <input id="radio2" type="radio" name="danhgia" value="4">
                    <label for="radio2">&#9733;</label>
                    <input id="radio3" type="radio" name="danhgia" value="3">
                    <label for="radio3">&#9733;</label>
                    <input id="radio4" type="radio" name="danhgia" value="2">
                    <label for="radio4">&#9733;</label>
                    <input id="radio5" type="radio" name="danhgia" value="1">
                    <label for="radio5">&#9733;</label>
                  </p>
                </br>
                <div class="form-contact"  style="margin-top:5px; width: 80%;margin:0 auto">
                    <input type="hidden" value="{!! $data->id !!}" name="idproduct" class="ip_product" style="margin-top:5px; width: 100%;border: 1px solid #d9d9d9; ">
                    <input type="text" placeholder="Họ và tên" value="{!! old('name') !!}" name="name" title="First Name" class="input-text txtname" style="margin-top:5px; width: 100%;border: 1px solid #d9d9d9; "></br>
                    <input type="text" placeholder="Email" value="{!! old('email') !!}" class="input-text txtemail" name="email" style="margin-top:5px; width: 100%;border: 1px solid #d9d9d9; "></br>
                    <textarea placeholder="Nội dung" name="conttent" title="Comment" class="required-entry input-text txtcontent"  cols="30" rows="10" style="margin-top:5px; width: 100%;border: 1px solid #d9d9d9; ">{!! old('conttent') !!}</textarea>
                    <button data-dismiss="modal" type="button" class="btn btn-default comment-submit send_danh_gia">Gửi</button>
                </div>
             </form><span class="guidulieu"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12"> 
        <div class="section-title fix">
          <h2>Related Product</h2>
        </div>
        <!-- Blog Slider -->
        <div class="propular-slider related-product owl-carousel">
          <!-- Single Tab Product -->
          <?php $product_lq = DB::table('products')
              ->where('cate_id',$data->cate_id)
              ->orderBy('id','DESC')
              ->take(4)->get()?>
          @foreach($product_lq as $product_lqs)
          <div class="single-product">
            <div class="pro-image-hover">
              <a href="{{route('chitietsanpham',[$product_lqs->id,$product_lqs->alias])}}" class="pro-image">
                <img class="primary" src="{!! asset('public/upload/'.$product_lqs->image) !!}" alt="" />
              </a>
              <div class="action-buttons">
                <a class="act-btn quick-view" href="#"><i class="fa fa-search"></i></a>
                <a class="act-btn favorite" href="#"><i class="fa fa-heart-o"></i></a>
                <button class="act-btn add-cart add_to_cart" data-id="{!! $product_lqs->id !!}"><i class="fa fa-shopping-basket"></i></button>
              </div>
            </div>
            <div class="pro-bref fix">
              <a class="pro-name" href="{{route('chitietsanpham',[$product_lqs->id,$product_lqs->alias])}}">{!! $product_lqs->name !!}</a>
              <div class="pro-ratting float-left">
                <i class="fa fa-star on"></i>
                <i class="fa fa-star on"></i>
                <i class="fa fa-star on"></i>
                <i class="fa fa-star on"></i>
                <i class="fa fa-star"></i>
              </div>
              <div class="pro-price float-right">
              @if($product_lqs->pricesale > 0)
              <span class="old"><?php echo number_format($product_lqs->price,0,',','.')?></span>
              <span class="new"><?php echo number_format($product_lqs->pricesale,0,',','.')?></span>
              @else
              <span class="new"><?php echo number_format($product_lqs->price,0,',','.')?></span>
              @endif
              </div>
            </div>
          </div>
          @endforeach
          <!-- Single Tab Product -->
          
          <!-- Single Tab Product -->
          
          <!-- Single Tab Product -->
         
          <!-- Single Tab Product -->
          
        </div>
      </div>
    </div>
  </div>
</div><!-- About Page End --> 

<!-- Service Area Start -->
<div class="service-area padding-70 fix">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-xs-12">
        <!-- Single Service -->
        <div class="single-service">
          <div class="icon"><i class="fa fa-truck"></i></div>
          <div class="text fix">
            <h4>FREE SHIPPING</h4>
            <p>on all orders over $90</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-xs-12">
        <!-- Single Service -->
        <div class="single-service">
          <div class="icon"><i class="fa fa-repeat"></i></div>
          <div class="text fix">
            <h4>RETURN EXCHANGE</h4>
            <p>Return in 30 days use trial</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-xs-12">
        <!-- Single Service -->
        <div class="single-service">
          <div class="icon"><i class="fa fa-volume-control-phone"></i></div>
          <div class="text fix">
            <h4>ONLINE SUPPORT</h4>
            <p>Alway support customer 24/7</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- Service Area End -->
  </section>
@stop