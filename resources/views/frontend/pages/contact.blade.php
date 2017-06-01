@extends('frontend.master')
@section('title','Liên hệ')
@section('lienhe','active')
@section('content')
<!-- Page Banner Start -->
<div id="myModalsend" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Zackas.vn</h4>
      </div>
      <div class="modal-body">
        <p>Zackas.vn cám ơn bạn.Chúng tôi sẽ liên hệ với bạn trong 24h</p>
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
        <h1>Contact</h1>
      </div>
    </div>
  </div>
</div><!-- Page Banner End -->
<!-- About Page Start -->
<div class="contact-page page margin-70 fix">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="contact-info">
          <div class="title"><h3>Contact Information</h3></div>
          <div class="row">
            <div class="col-sm-8 col-xs-12">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaco laboris nisi ut aliquip. Ut enim ad minim veniam, quis nostrud exercitation ullam.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br /> tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="sin-contact fix">
                <img src="{{ url('public/user/img/icons/address-2.png') }}" alt="" />
                <p>Main town,  Anystreen <br />C/A 1254 New Yourk</p>
              </div>
              <div class="sin-contact fix">
                <img src="{{ url('public/user/img/icons/phone-2.png') }}" alt="" />
                <p>+012  456  456  456 <br />+012  356  897  222</p>
              </div>
              <div class="sin-contact fix">
                <img src="{{ url('public/user/img/icons/globe-2.png') }}" alt="" />
                <p><a href="#">info@zackas.com</a><a href="#">www.zackas.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12">
        <div id="googleMap">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.059999468782!2d105.83595711438599!3d20.99023188601932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac66656d11d3%3A0x424eae32ba3c6196!2zSOG7jWMgdmnhu4duIFF14bqjbiBsw70gR2nDoW8gZOG7pWM!5e0!3m2!1svi!2s!4v1489160201377" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="contact-form">
          <div class="title"><h3>Leave A Message</h3></div>
          <div class="row">
            <form action="" id="contact" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="col-sm-6 col-xs-12">
                <div class="help-block with-errors" style="color: red;"><?php echo $errors->first('name'); ?></div>
                <p>
                  <label for="name">Name <span>*</span></label>
                  <input type="text"   placeholder="Họ và tên" value="{!! old('name') !!}" name="name" title="First Name" class="input-text ">
                </p>
                <div class="help-block with-errors" style="color: red;"><?php echo $errors->first('email'); ?></div>
                <p>
                  <label for="email">E-mail <span>*</span></label>
                  <input type="email"  placeholder="Email" value="{!! old('email') !!}" class="input-text" name="email"> 
                </p>
              </div>
              <div class="col-sm-6 col-xs-12">
                <div class="help-block with-errors" style="color: red;"><?php echo $errors->first('content'); ?></div>
                <p>
                  <label for="message">Message <span>*</span></label>
                  <textarea  cols="30" rows="10" placeholder="Nội dung" name="content" title="Comment" class="required-entry input-text" cols="5" rows="3">{!! old('content') !!}</textarea>   
                </p>
                <p>
                  <button id="myBtnSend" type="submit" data-dismiss="modal" class="btn comment-submit">Send</button>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- About Page End --> 

@stop