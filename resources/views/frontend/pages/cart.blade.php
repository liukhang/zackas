@extends('frontend.master')
@section('title','Giỏ hàng')
@section('content')

<div class="page-banner padding-120 fix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Cart</h1>
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
					<li><span>Cart</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- About Page Start -->
<div class="cart-page page margin-70 fix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="table-responsive">
					<table class="table cart-table">
						<thead>
							<tr>
								<th class="width-1">Hình ảnh</th>
								<th class="width-2">Tên sản phẩm </th>
								<th class="width-3">Giá</th>
								<th class="width-4">Số lượng</th>	
								<th class="width-5">Tổng</th>	
								<th class="width-6">Thao tác</th>	
							</tr>														
						</thead>
						<tbody>
						<?php $content = Cart::content(); 
							$total = 0;
							$total_sale = 0;
						?>
						@foreach($content as $row)
							<tr class="carttr_1" id="cart_{!! $row->rowId !!}">
								<td>
									<div class="cartpage-image">
										<a href="{!! url('/',[$row->options->alias]) !!}"><img alt="" src="{!! asset('public/upload/'.$row->options->image)!!}"></a>
									</div>
								</td>
								<td>
									<div class="cartpage-pro-dec">
										<a href="{!! url('/',[$row->options->alias]) !!}">{!! $row->name !!}</a>
									</div>
								</td>
								<td>
									<div class="cart-page-price">
										<p>
											@if($row->options->pricesale > 0)
											<?php echo number_format($row->options->pricesale,0,',','.') ?>đ
											@else
											<?php echo number_format($row->price,0,',','.') ?>đ
											@endif
										</p>
									</div>
								</td>
								<td>
									<div class="cart-pro-quantity pro-quantity">
										<input type="text" value="<?php echo $row->qty ?>" name="qty" name="qtybutton" class="pro-quantity-box item_cart_{!! $row->rowId !!}">
									</div></br>
									<a href="javascript:void(0)" class="update_cart" data-id="{!! $row->rowId !!}" data-qty="{!! $row->qty !!}"><span class="btn btn-primary" style="margin:0;padding:1px; border-radius:0">Update</span></a>
								</td>
								<td>
									<div class="subtotal">
										<p>
											@if($row->options->pricesale > 0)
											<?php 
												echo number_format($row->options->pricesale * $row->qty,0,',','.');
												$total_sale+=($row->options->pricesale * $row->qty);
											?>đ
											@else
											<?php 
												echo number_format($row->qty * $row->price,0,',','.');
												$total+=($row->qty * $row->price);
											 ?>đ
											@endif
										</p>
									</div>
								</td>
								<td>
									<div class="cartpage-delete-item">
										<a title="Remove item" href="javascript:void(0)"><i class="fa fa-trash-o item-remove" data-id="{!! $row->rowId !!}"></i></a>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>									
					</table>
				</div>
				<div class="cartpage-button fix">
					<div class="button-left">
						<a href="{!! url('/') !!}"><button class="btn">Tiếp tục mua hàng </button></a>
					</div>
					<div class="button-right">
						<a href="{!! url('huy-gio-hang') !!}"><button class="btn">Xóa giỏ hàng</button></a>
					</div>	
				</div>		
			</div>
		</div>
		
		<div class="row">
			
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="float: right;">
				<!-- total-amount start -->
				<div class="cartpage-total-amount">
					<p><span class="grand-t">Tổng tiền<span class="grand-t-p tong_cart"><?php  echo number_format($total_sale+$total,0,',','.') ?></span>đ</span>	</p>
					<a href="{!! url('thanh-toan') !!}"><button class="btn">Thanh toán</button></a>
				</div>
				<!-- total-amount end -->
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

@stop