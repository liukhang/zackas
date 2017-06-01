@extends('backend.master')
@section('controller','Tin tức')
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
                        <label for="txtten" class="col-md-2">Name</label>
                        <div class="col-md-10"> 
                            <input type="text" class="form-control" name="txtname"  placeholder="Tiêu đề bài viết" value="{!! old('txtten') !!}">
                        </div>
                      </div>
                    
                      <div id="dropzone">
                        <div>upload img</div>
                        <input type="file" name="fileimages"/>
                      </div>
                        <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Thêm banner</button>
                    <button type="reset" class="btn btn-default">Làm lại</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
            <!-- right column -->
          </div>   <!-- /.row -->
        </section>
@stop