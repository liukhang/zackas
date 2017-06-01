@extends('backend.master')
@section('controller','User')
@section('action','Sữa')
@section('content')
<section class="content">
        <form role="form" class="form-horizontal" method="post" action="" enctype="multipart/form-data" name="from-editproduct">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
             @include ('backend.blocks.error')
              <!-- general form elements -->
              <div class="box box-primary">
                <!-- form start -->
                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                  <div class="box-body">
                    <div class="form-group">
                        <label for="txtusername" class="col-md-2">UserName</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtusername"  value="{!! old ('txtusername',isset($data)?$data["username"]:"") !!}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtpassword" class="col-md-2">Mật Khẩu Mới</label>
                        <div class="col-md-10">
                        <input type="password" name="txtpassword" class="form-control " value="" placeholder="Nhập Mật Khẩu" >
                        @if($errors->has('txtpassword'))
                            <p style="color:red">{{ $errors->first('txtpassword') }}</p>
                        @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtpassword" class="col-md-2">Nhập Lại Mật Khẩu Mới</label>
                        <div class="col-md-10">
                        <input type="password" name="repassword" class="form-control" value=""  placeholder="Nhập Lại Mật Khẩu" >
                    
                        @if($errors->has('repassword'))
                            <p style="color:red">{{ $errors->first('repassword') }}</p>
                        @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtemail" class="col-md-2">Email</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtemail"  placeholder="Tên sản phẩm..." value="{!! old ('txtemail',isset($data)?$data["email"]:"") !!}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtfirstname" class="col-md-2">Họ Tên</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtfirstname"  placeholder="Tên sản phẩm..." value="{!! old ('txtfirstname',isset($data)?$data["firstname"]:"") !!}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtphone" class="col-md-2">SĐT</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtphone"  placeholder="Tên sản phẩm..." value="{!! old ('txtphone',isset($data)?$data["phone"]:"") !!}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtaddress" class="col-md-2">Địa Chỉ</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtaddress"  placeholder="Tên sản phẩm..." value="{!! old ('txtaddress',isset($data)?$data["address"]:"") !!}">
                        </div>
                      </div>
                      <!--<div class="form-group">
                        <label for="txtlevel" class="col-md-2">Level</label>
                        <div class="col-md-10">
                            <label class="radio-inline">
		                            <input name="txtlevel" value="0" checked="" type="radio">Thường
		                        </label>
		                        <label class="radio-inline">
		                            <input name="txtlevel" value="1" type="radio">Admin
		                        </label> 
                        </div>
                      </div>-->
                      
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Sữa user</button>
                    <button type="reset" class="btn btn-default">Làm lại</button>
                  </div>
                
              </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
          </div>   <!-- /.row -->
          </form>

        </section>
    
@stop