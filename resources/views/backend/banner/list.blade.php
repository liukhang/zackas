@extends('backend.master')
@section('controller','Banner')
@section('action','Danh sách')
@section('content')
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                <a href="{!! url('admin/banner/addbanner') !!}"><button style="margin-bottom:10px;" type="button" class="btn btn-success">New Banner</button></a>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Hình ảnh</th>
                        <th>Ngày tạo</th>
                        <th style="width:8%">Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($banner as $banners)
                      <tr>
                        <td>{!! $banners["name"] !!}</td>
                        <td><img src="{!! asset('public/upload/banner/'.$banners["image"]) !!}" width="30" alt="{!! $banners["name"] !!}"></td>
                        <td>
                        {!!
                        \Carbon\Carbon::createFromTimeStamp(strtotime($banners["created_at"]))->diffForHumans();
                        !!}
                        </td>
                        <td align="center">
                         <a onclick="return confirm('bạn có muốn xóa không ?')" href="{!! url('admin/banner/deletebanner',$banners->id) !!}"><i class="fa fa-trash-o"></i></a> 
                          <!--<a onclick="return $('#myModal').modal('show')"><i class="fa fa-trash-o"></i></a> -->
                        </td>
                      </tr>
                       <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Zackas.vn</h4>
                            </div>
                            <div class="modal-body">
                              <p>Bạn có chắc chắn muốn xóa !</p>
                            </div>
                            <div class="modal-footer">
                              <a href="{!! url('admin/banner/deletebanner',$banners->id) !!}"><button type="button" class="btn btn-default" >Đồng ý</button></a>
                            </div>
                          </div>

                        </div>
                      </div>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="pull-right">
                    <?php //$arrProduct->setPath('list'); ?>
                    <?php //echo $arrProduct->render(); ?>                 
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section>
    
@stop