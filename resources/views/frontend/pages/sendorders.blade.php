@extends('frontend.master')
@section('title','Thanh toán đơn hàng')
@section('content')

<div id="myModalsendorder" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Zackas.vn</h4>
      </div>
      <div class="modal-body">
        <p>Zackas.vn ảm ơn bạn đã đặt hàng!Chúng tôi sẽ liên hệ và giao hàng trong thời gian sớm nhất</p>
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
        <h1>Thanh Toán</h1>
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
          <li><span>Thanh Toán</span></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="contact-page page margin-70 fix">
  <div class="container">
    <div class="row">
      
      <div class="col-xs-12">
        <div class="contact-form">
          <div class="title"><h3>Thanh toán khi nhận hàng</h3></div>
          <div class="row">
            <form action="" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="col-sm-6 col-xs-12">
              <div class="help-block with-errors" style="color: red;"><?php echo $errors->first('txtName'); ?></div>
                <p>
                  <label for="name">Name <span>*</span></label>
                  <input type="text"  name="txtName" value="{!! old('txtName') !!}"  placeholder="Họ và tên"/>
                  
                </p>
                <div class="help-block with-errors" style="color: red;"><?php echo $errors->first('txtEmail'); ?></div>
                <p>

                  <label for="email">E-mail <span>*</span></label>
                  <input type="text"  name="txtEmail" value="{!! old('txtEmail') !!}"  placeholder="Vui lòng nhập Email"/>
                  
                </p>
                <div class="help-block with-errors" style="color: red;"><?php echo $errors->first('txtPhone'); ?></div>
                <p>
                  <label for="phone">Phone <span>*</span></label>
                  <input type="number" name="txtPhone" value="{!! old('txtPhone') !!}"  placeholder="Số điện thoại"/>
                  
                </p>
                <div class="help-block with-errors" style="color: red;"><?php echo $errors->first('txtAddress'); ?></div>
                <p>
                  <label for="subject">Địa chỉ <span>*</span></label>
                  <input type="text"  name="txtAddress" value="{!! old('txtAddress') !!}"  placeholder="Địa chỉ"/>
                  
                </p>
                <p>
                <label for="phone">CiTy<span>*</span></label>
                <select name="txtcity" class="form-control" id="sel1">
                  <option value=''></option>
                  <option value='Hà Nội'>Hà Nội</option>
                  <option value='Sài Gòn'>Sài Gòn</option>
                  <option value='Nam Định'>Nam Định</option>
                 </select>
                </p></br>
                <p>
                 @if(Cart::count() > 0)
                  <button id="myBtnSendorder" class="btn order-send" name="sendcartok" type="submit" style="cursor: pointer;">ĐẶT HÀNG</button>
                  @endif
                </p>
              </div>
              <div class="col-sm-6 col-xs-12">
                <ul class="product-list">
                  <?php $content = Cart::content();
                    $total = 0;
                    $total_sale = 0; 
                  ?>
                  @foreach($content as $row)
                  <input type="hidden" name="total_qty" value="{!! Cart::count() !!}">
                  @if($row->options->pricesale > 0)
                  <?php 
                    $total_sale+=($row->options->pricesale * $row["qty"]);
                  ?>
                  <input type="hidden" name="idproduct" value="{!! $row->id !!}">
                  <input type="hidden" name="sl" value="{!! $row->qty !!}">
                    <input type="hidden" name="gia_sp" value="@if($row->options->pricesale > 0){!! $row->options->pricesale !!}@else {!! $row->price !!} @endif">
                   <input type="hidden" name="tong_gia_sp" value="@if($row->options->pricesale > 0){!! $row->options->pricesale * $row->qty !!}@else {!! $row->price * $row->qty !!} @endif">
                  @else
                      <?php $total+=($row["qty"] * $row["price"]); ?>
                  @endif
                 <li class="product product-has-image clearfix" style="margin-bottom:5px;">
                     <img src="{!! url('public/upload/'.$row->options->image) !!}" class="pull-left" width="50px" style="margin-right:5px;">
                          <div class="product-info pull-left"> 
                             <span class="product-info-name"> 
                                <span style="font-size:10px">{!! $row->name !!}</span>  <span style="color:#C00; padding:0px 5px;"> X </span> {!! $row->qty !!}
                             </span>
                            </div>
                      <span class="product-price pull-right"> 
                        <input type="hidden" name="total_price" value="{!! $total+$total_sale !!}">
                        <?php 
                            if($row->options->pricesale > 0){
                              echo  number_format($row->qty * $row->options->pricesale,0,',','.');
                            }else{
                              echo  number_format($row->qty * $row->price,0,',','.');
                            } 
                        ?>đ
                       </span>
                     </li>
                     @endforeach
                     <hr />
                  </ul>
                  <ul>
                    <li class="product product-has-image clearfix" style="margin-bottom:10px;">
                    Tổng cộng: 
                      <strong class="product-price pull-right" style="color:#3C0"> 
                      <?php echo  number_format($total+$total_sale,0,',','.') ?>đ
                      </strong> 
                    </li>
                  </ul></br>
                  <!--<p>Thanh toán qua PayPal</p>
                  </br>-->
                  <!--<p>
                    @if(Cart::count() > 0)
                    <a href="{{url('/paypal')}}"><img src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" align="left" style="margin-right:7px;"></a>
                    @endif
                  </p>
                <p>Hãy nhắn tin ngay bay giờ để nhận hỗ trợ từ chúng tôi</p>-->
              </div>
            </form>
          </div>
        </div>
          <form action="paypal" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="col-sm-6 col-xs-12">
              <div class="help-block with-errors" style="color: red;"><?php echo $errors->first('txtName'); ?></div>
                <h3 style="float:left;color:#464545;font-size: 14px;font-weight: 800;">Thanh toán qua PayPal</h3>
                </br>
                </br>
                <p>
                 @if(Cart::count() > 0)
                  <button  id="myBtnSendorder" class="btn order-send" name="sendcartok" type="submit" style="cursor: pointer;float:left"><a href="#"><img src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" align="left" style="margin-right:7px;"></a></button>
                  
                  @endif
                </p>
                </br>
                </br>
                </br>
                <p style="float:left">Hãy nhắn tin ngay bay giờ để nhận hỗ trợ từ chúng tôi</p>
              </div>
              <div class="col-sm-6 col-xs-12" style="display:none;">
                <ul class="product-list">
                  <?php $content = Cart::content();
                    $total = 0;
                    $total_sale = 0; 
                  ?>
                  @foreach($content as $row)
                  <input type="hidden" name="total_qty" value="{!! Cart::count() !!}">
                  @if($row->options->pricesale > 0)
                  <?php 
                    $total_sale+=($row->options->pricesale * $row["qty"]);
                  ?>
                  <input type="hidden" name="idproduct" value="{!! $row->id !!}">
                  <input type="hidden" name="sl" value="{!! $row->qty !!}">
                    <input type="hidden" name="gia_sp" value="@if($row->options->pricesale > 0){!! $row->options->pricesale !!}@else {!! $row->price !!} @endif">
                   <input type="hidden" name="tong_gia_sp" value="@if($row->options->pricesale > 0){!! $row->options->pricesale * $row->qty !!}@else {!! $row->price * $row->qty !!} @endif">
                  @else
                      <?php $total+=($row["qty"] * $row["price"]); ?>
                  @endif
                 <li class="product product-has-image clearfix" style="margin-bottom:5px;">
                     <img src="{!! url('public/upload/'.$row->options->image) !!}" class="pull-left" width="50px" style="margin-right:5px;">
                          <div class="product-info pull-left"> 
                             <span class="product-info-name"> 
                                <span style="font-size:10px">{!! $row->name !!}</span>  <span style="color:#C00; padding:0px 5px;"> X </span> {!! $row->qty !!}
                             </span>
                            </div>
                      <span class="product-price pull-right"> 
                        <input type="hidden" name="total_price" value="{!! $total+$total_sale !!}">
                        <input type="hidden" name="name" value="{!! $row->name !!}">
                        <?php 
                            if($row->options->pricesale > 0){
                              echo  number_format($row->qty * $row->options->pricesale,0,',','.');
                            }else{
                              echo  number_format($row->qty * $row->price,0,',','.');
                            } 
                        ?>đ
                       </span>
                     </li>
                     @endforeach
                     <hr />
                  </ul>
                  <ul>
                    <li class="product product-has-image clearfix" style="margin-bottom:10px;">
                    Tổng cộng: 
                      <strong class="product-price pull-right" style="color:#3C0"> 
                      <?php echo  number_format($total+$total_sale,0,',','.') ?>đ
                      </strong> 
                    </li>
                  </ul></br>
                  <p>Thanh toán qua PayPal</p>
                  </br>
                  <p>
                    @if(Cart::count() > 0)
                    <a href="{{url('/paypal')}}"><img src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" align="left" style="margin-right:7px;"></a>
                    @endif
                  </p>
                <p>Hãy nhắn tin ngay bay giờ để nhận hỗ trợ từ chúng tôi</p>
              </div>
            </form>
      </div>
    </div>
  </div>
</div></br>
@stop

