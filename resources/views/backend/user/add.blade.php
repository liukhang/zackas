@extends('backend.master')
@section('controller','User')
@section('action','Thêm')
@section('content')
<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
             @include ('backend.blocks.error')
              <!-- general form elements -->
              <div class="box box-primary">
                <!-- form start -->
                <form role="form" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                  <div class="box-body">
                      <div class="form-group">
                        <label for="txtusername" class="col-md-2">UserName</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtusername"  placeholder="User name" value="{!! old('txtusername') !!}">
                        </div>
                      </div>
                     <div class="form-group">
                        <label for="txtpassword" class="col-md-2">PassWord</label>
                        <div class="col-md-10"> 
                            <input type="password" class="form-control" name="txtpassword"  placeholder="Password" value="{!! old('txtpassword') !!}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtemail" class="col-md-2">Email</label>
                        <div class="col-md-10"> 
                            <input type="email" class="form-control" name="txtemail"  placeholder="email" value="{!! old('txtemail') !!}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtfirstname" class="col-md-2">Họ Tên</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtfirstname"  placeholder="Họ Tên" value="{!! old('txtfirstname') !!}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtphone" class="col-md-2">SĐT</label>
                        <div class="col-md-10"> 
                            <input type="number" class="form-control" name="txtphone"  placeholder="SĐT" value="{!! old('txtphone') !!}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtaddress" class="col-md-2">Địa Chỉ</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtaddress"  placeholder="Address" value="{!! old('txtaddress') !!}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="txtlevel" class="col-md-2">Level</label>
                        <div class="col-md-10">
                            <label class="radio-inline">
		                            <input name="txtlevel" value="0" checked="" type="radio">Thường
		                        </label>
		                        <label class="radio-inline">
		                            <input name="txtlevel" value="1" type="radio">Admin
		                        </label> 
                        </div>
                      </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Thêm user</button>
                    <button type="reset" class="btn btn-default">Làm lại</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->

       
            <!-- right column -->
          </div>   <!-- /.row -->
          

        </section>
    
@stop