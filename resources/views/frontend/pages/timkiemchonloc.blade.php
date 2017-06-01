@extends('frontend.master')
@section('search', 'active')
@section('title','Danh mục sách các loại')
@section('content')

<div class="page-banner padding-120 fix">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>Sản Phẩm Tìm Kiếm</h1>
      </div>
    </div>
  </div>
</div>
<section class="content-slide">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li><a href="{!! asset('/') !!}">Trang chủ</a></li>
          <li class="active">Tìm Kiếm </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- shop list -->
<div class="shop-page page margin-70 fix">
  <div class="container">
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
      <div class="products-container tab-products-container tab-content float-left fix">
        <div class="tab-pane active" id="pro-grid">
          <!-- Single Product -->
          @foreach ($products as $product)
          <div class="col-sm-4 col-md-3 col-xs-12">
            <div class="single-product">
              <div class="pro-image-hover">
                <a href="{{route('chitietsanpham',[$product->id,$product->alias])}}" class="pro-image">
                  <img class="primary" src="{!! asset('public/upload/'.$product->image) !!}" alt="" />
                </a>
                <div class="action-buttons">
                  <a class="act-btn quick-view" href="#"><i class="fa fa-search"></i></a>
                  <a class="act-btn favorite" href="#"><i class="fa fa-heart-o"></i></a>
                  <button class="act-btn add-cart add_to_cart" data-id="{!! $product->id !!}"><i class="fa fa-shopping-basket"></i></button>
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
                <a class="cart add_to_cart" data-id="{!! $product->id !!}" href="javascript:void(0)"><i class="fa fa-shopping-basket"></i></a>
              </div>
            </div>
          </div>
          @endforeach
          <!-- Single Product -->
          
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

</section>

@stop