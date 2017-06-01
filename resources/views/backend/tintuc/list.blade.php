@extends('backend.master')
@section('controller','Sản phẩm')
@section('action','Danh sách')
@section('tintuc','active')
@section('list_tt', 'active')
@section('content')
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Tiêu Đề</th>
                        <th>Hình ảnh</th>
                        <th>Users</th>
                        <th>Ngày tạo</th>
                        <th style="width:8%">Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($tintuc as $tintucs)
                      <tr>
                        <td>{!! $tintucs["name"] !!}</td>
                        <td><img src="{!! asset('public/upload/tintuc/'.$tintucs["image"]) !!}" width="30" alt="{!! $tintucs["name"] !!}"></td>
                        <td><?php
                              $puser = DB::table('users')->where('id',$tintucs["user_id"])->first();
                              echo $puser->firstname;
                          ?></td>
                        <td>
                        {!!
                        \Carbon\Carbon::createFromTimeStamp(strtotime($tintucs["created_at"]))->diffForHumans();
                        !!}
                     </td>
                        <td align="center">
                          <a href="{!! url('admin/tintuc/edit',$tintucs->id) !!}"><i class="fa fa-edit"></i></a>
                           <a onclick="return confirm('bạn có muốn xóa không ?')" href="{!! url('admin/tintuc/delete',$tintucs->id) !!}"><i class="fa fa-trash-o"></i></a>
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
                              <a href="{!! url('admin/tintuc/delete',$tintucs->id) !!}"><button type="button" class="btn btn-default" >Đồng ý</button></a>
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