@extends('frontend.master')
@section('sanpham', 'active')
@section('title','Danh mục sách các loại')
@section('content')

<div class="page-banner padding-120 fix">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>{{ $namecate->name }}</h1>
      </div>
    </div>
  </div>
</div><!-- Page Banner End -->
<!-- Shop Page Area Start -->
<section class="content-slide">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li><a href="{!! asset('/') !!}">Trang chủ</a></li>
          
          <li class="active">{{ $namecate->name }}</li>

        </ul>
      </div>
    </div>
  </div>
</section>
<div class="shop-page page-right-sidebar page margin-70 fix">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <!-- Shop Tool Bar -->
          <div class="col-xs-12 fix">
            <div class="shpo-tool-bar fix">
              <ul class="view-mode float-left">
                <li class="active"><a href="#pro-grid" data-toggle="tab"><i class="fa fa-th"></i></a></li>
                <li><a href="#pro-list" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
              </ul>
              <div class="sort-by float-left">
                <span>Sort By</span>
                <select name="sort-by">
                  <option value="mercede" selected="selected">price: Lower</option>
                  <option value="saab">price(low&gt;high)</option>
                  <option value="mercedes">price(high &gt; low)</option>
                  <option value="audi">rating(highest)</option>
                </select>
              </div>
              <div class="show-product float-left">
                <span>Show</span>
                <select name="sort-by">
                  <option value="mercede" selected="selected">16</option>
                  <option value="saab">20</option>
                  <option value="mercedes">24</option>
                </select>
                <span>Per Page</span>
              </div>
              <div class="showing-pro float-right">
                <span>Showing 1 - 12 of 16 items</span>
              </div>
            </div>
          </div>
          <div class="tab-products-container tab-content float-left fix">
            <div class="tab-pane active" id="pro-grid">
              <!-- Single Product -->
               @foreach ($products as $product)
              <div class="col-sm-4 col-xs-12">
                <div class="single-product">
                  <div class="pro-image-hover">
                    <a href="{{route('chitietsanpham',[$product->id,$product->alias])}}" class="pro-image">
                      <img class="primary" src="{!! asset('public/upload/'.$product->image) !!}" alt="" />
                    </a>
                    <div class="action-buttons">
                      <a class="act-btn quick-view" href="#"><i class="fa fa-search"></i></a>
                      <a class="act-btn favorite" href="#"><i class="fa fa-heart-o"></i></a>
                      <input type="hidden" value="1" name="qty" class="pro-quantity-box">
                      <button class="act-btn add-cart add_to_cart" data-toggle="modal" data-target="#myModal" data-id="{!! $product->id !!}"><i class="fa fa-shopping-basket"></i></button>
                    </div>
                  </div>
                  <div class="pro-bref fix">
                    <a class="pro-name" href="{{route('chitietsanpham',[$product->id,$product->alias])}}">{{ $product->name }}</a>
                    <div class="pro-ratting float-left">
                      <i class="fa fa-star on"></i>
                      <i class="fa fa-star on"></i>
                      <i class="fa fa-star on"></i>
                      <i class="fa fa-star on"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="pro-price float-right">
                     @if($product->pricesale > 0)
                      <span class="new"><?php echo number_format($product->price,0,',','.') ?>đ</span>
                      <span class="old"><?php echo number_format($product->pricesale,0,',','.') ?>đ</span>
                      @else
                      <span class="new"><?php echo number_format($product->price,0,',','.') ?>đ</span>
                    @endif
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="tab-pane" id="pro-list">
              <!-- Single Product -->
               @foreach ($products as $product)
          <div class="single-list-product col-xs-12">
            <div class="list-pro-image">
              <a href="{{route('chitietsanpham',[$product->id,$product->alias])}}">
                <img class="primary" src="{!! asset('public/upload/'.$product->image) !!}" alt="" />
              </a>
            </div>
            <div class="list-pro-des fix">
              <a class="pro-name" href="{{route('chitietsanpham',[$product->id,$product->alias])}}">{{ $product->name }}</a>
              <div class="ratting">
                <i class="fa fa-star on"></i>
                <i class="fa fa-star on"></i>
                <i class="fa fa-star on"></i>
                <i class="fa fa-star on"></i>
                <i class="fa fa-star"></i>
              </div>
              <h4 class="list-pro-price">
              @if($product->pricesale > 0)
                <span class="new"><?php echo number_format($product->price,0,',','.') ?>đ</span>
                <span class="old"><?php echo number_format($product->pricesale,0,',','.') ?>đ</span>
              @else
                <span class="new"><?php echo number_format($product->price,0,',','.') ?>đ</span>
              @endif
              </h4>
              <p>{!! $product->intro !!}</p>
              <div class="list-actions-btn">
                <a class="quick-view" href="#"><i class="fa fa-search"></i></a>
                <a class="favorite" href="#"><i class="fa fa-heart-o"></i></a>
                <a class="cart" href="#"><i class="fa fa-shopping-basket"></i></a>
              </div>
            </div>
          </div>
          @endforeach
              
            </div>
          </div>
          <div class="col-xs-12">
            <div class="paginations text-center">
            <ul>
              @if($products->currentPage() != 1)
                <li class="prev"><a href="{!! str_replace('/?','?',$products->url($products->currentPage()-1)) !!}"><i class="fa fa-angle-left"></i></a></li>
              @endif
                @for ($i = 1 ; $i <= $products->lastPage() ; $i = $i + 1 )
                <li class="{!! ($products->currentPage() == $i) ? 'active' : '' !!}">
                <span>
                  <a href="{!! str_replace('/?','?',$products->url($i)) !!}">{!! $i !!}</a>
                </span>
                </li>
                @endfor
                @if($products->currentPage() != $products->lastPage())
                <li class="next"><a href="{!! str_replace('/?','?',$products->url($products->currentPage()+1)) !!}"><i class="fa fa-angle-right"></i></a></li>
                @endif
            </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="product-sidebar row">
          <!-- single-sidebar start -->
          <div class="single-sidebar category-sidebar col-md-12 col-sm-6 col-xs-12">
            <h2 class="sidebar-title">CATEGORY</h2>
            <!-- treeview start -->
            <div id="cat-treeview">
              <ul>
              @foreach ($categorys as $category)
                <li class="open"><a href="{!!route('cateparent',[$category->id,$category->alias]) !!}">{!! $category->name !!}</a>
                  <ul class="treeview" style="display: none !important;">
                  <?php $parent = DB::table('categories')->select('id','name','alias','prarent_id')->where('prarent_id',$category->id)->orderBy('id','DESC')->get(); ?>
                  @foreach($parent as $parents)
                    <li><a href="{!!route('cateparent',[$parents->id,$category->alias]) !!}"><?php echo $parents->name ?></a></li>
                  @endforeach
                  </ul>
                </li> 
                @endforeach  
              </ul>
            </div>
            <!-- treeview end -->
          </div>
          <!-- single-sidebar end -->
          <!-- single-sidebar start -->
          <!--<div class="single-sidebar materials-sidebar col-md-12 col-sm-6 col-xs-12">
            <h2 class="sidebar-title">MATERIALS</h2>
            <div class="material">
              <ul>
                <li><input id="cotton" type="checkbox" name="cotton"> <label for="cotton">COTTON</label></li>
                <li><input id="fiber" type="checkbox" name="bamboo fiber"> <label for="fiber">BAMBOO FIBER</label></li>
                <li><input id="blends" type="checkbox" name="cotton blends"> <label for="blends">COTTON BLENDS</label></li>
                <li><input id="linen" type="checkbox" name="linen"> <label for="linen">LINEN</label></li>
                <li><input id="polister" type="checkbox" name="polister blends"> <label for="polister">POLISTER BLENDS</label></li>
                <li><input id="jeans" type="checkbox" name="jeans"> <label for="jeans">JEANS</label></li>
                <li><input id="cashmere" type="checkbox" name="cashmere blends"> <label for="cashmere">CASHMERE BLENDS</label></li>
                <li><input id="leather" type="checkbox" name="genuine leather"> <label for="leather">GENUINE LEATHER</label></li>
              </ul>
            </div>
          </div>-->
          <!-- single-sidebar end -->
          <!-- single-sidebar start -->
          <!--<div class="single-sidebar color-sidebar col-md-12 col-sm-6 col-xs-12">
            <h2 class="sidebar-title">Brands</h2>
            <div class="brands">
              <ul>
                <li><input id="zare" type="checkbox" name="zare"> <label for="zare">ZARE</label></li>
                <li><input id="dunhall" type="checkbox" name="dunhall"> <label for="dunhall">DUNHILL</label></li>
                <li><input id="walmart" type="checkbox" name="walmart"> <label for="walmart">WALMART</label></li>
                <li><input id="arong" type="checkbox" name="arong"> <label for="arong">ARONG</label></li>
                <li><input id="rong" type="checkbox" name="rong"> <label for="rong">RONG</label></li>
                <li><input id="velloci" type="checkbox" name="velloci"> <label for="velloci">VELLOCI</label></li>
                <li><input id="gabbana" type="checkbox" name="gabbana"> <label for="gabbana">DOLCE & GABBANA</label></li>
                <li><input id="yellow" type="checkbox" name="yellow"> <label for="yellow">YELLOW</label></li>
              </ul>
            </div>
          </div>-->
          <!-- single-sidebar end --> 
          <!-- single-sidebar start -->
          <!--<div class="single-sidebar color-sidebar col-md-12 col-sm-6 col-xs-12">
            <h2 class="sidebar-title">color</h2>
            <div class="color fix">
              <ul>
                <li><a class="white" href="#"></a></li>
                <li><a class="red" href="#"></a></li>
                <li><a class="dep-red" href="#"></a></li>
                <li><a class="violet" href="#"></a></li>
                <li><a class="pink" href="#"></a></li>
                <li><a class="blue" href="#"></a></li>
                <li><a class="dark-blue" href="#"></a></li>
                <li><a class="dark-cyan" href="#"></a></li>
                <li><a class="light-blue" href="#"></a></li>
                <li><a class="green" href="#"></a></li>
                <li><a class="light-green" href="#"></a></li>
                <li><a class="light-orange" href="#"></a></li>
              </ul>
            </div>
          </div>-->
          <!-- single-sidebar end -->
          <!-- single-sidebar start -->
          <div class="single-sidebar size-sidebar col-md-12 col-sm-6 col-xs-12">
            <h2 class="sidebar-title">size</h2>
            <div class="size fix">
              <ul>
               
                <li><a class="" href="{{ url('/timkiem?tukhoa=Size XS',$namecate->alias) }}">xs</a></li>
                <li><a class="" href="{{ url('/timkiem?tukhoa=Size S',$namecate->alias) }}">s</a></li>
                <li><a class="" href="{{ url('/timkiem?tukhoa=Size M',$namecate->alias) }}">m</a></li>
                <li><a class="" href="{{ url('/timkiem?tukhoa=Size L',$namecate->alias) }}">l</a></li>
                <li><a class="" href="{{ url('/timkiem?tukhoa=Size XL',$namecate->alias) }}">xl</a></li>
              </ul>
            </div>
          </div>
          <!-- single-sidebar end -->
          <!-- single-sidebar start -->
          <!--<div class="single-sidebar product-price-range col-md-12 col-sm-6 col-xs-12">
            <h2 class="sidebar-title">Price</h2>
            <div id="slider-range"></div>
            <p>
                <input type="text" id="price-amount" readonly>
            </p>
          </div>-->
          <!-- single-sidebar end -->   
          <!-- single-sidebar start -->             
          <!--<div class="single-sidebar tag-sidebar col-md-12 col-sm-6 col-xs-12">
            <h2 class="sidebar-title">tags </h2>
            <div class="product-tag">
              <a href="#">men</a>
              <a href="#">kids</a>
              <a href="#">cap</a>
              <a href="#">women</a>
              <a href="#">dress</a>
              <a href="#">fashion</a>
              <a href="#">shopping</a>
              <a href="#">men store</a>
              <a href="#">jaket</a>
              <a href="#">style</a>
              <a href="#">suits</a>
            </div>
          </div>-->
          <!-- single-sidebar end -->       
        </div>
      </div>
    </div>
  </div>
</div><!-- Shop Page Area End --> 

@stop