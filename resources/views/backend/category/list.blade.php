@extends('backend.master')
@section('controller','Danh mục')
@section('action','Danh sách')
@section('danhmuc', 'active')
@section('list_dm', 'active')
@section('content')
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <div class="form-group pull-right">
                    <input type="text" class="search form-control" placeholder="What you looking for?">
                  </div>
                  <span class="counter pull-right"></span>
                  <table id="example2" class="table table-bordered table-hover results">
                    <thead>
                      <tr>
                        <th>Tên danh mục</th>
                        <th style="width:6%" align="center">Thứ tự</th>
                        <th>Loại danh mục</th>
                        <th>Keyword</th>
                        <th>Mô tả</th>
                        <th style="width:8%">Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($listCate as $cates)
                      <tr>
                        <td>{!! $cates->name !!}</td>
                        <td align="center">{!! $cates->order !!}</td>
                        <td>
                          @if($cates->prarent_id == 0)
                          {!! "--" !!}
                          @else
                          <?php
                              $pdata = DB::table('categories')->where('id',$cates->prarent_id)->first();
                             echo @$pdata->name;
                          ?>
                          @endif
                        </td>
                        <td>{!! $cates->keyworks !!}</td>
                        <td>{!! $cates->discription !!}</td>
                        <td align="center">
                          <a href="{!! url('admin/category/edit',$cates->id) !!}"><i class="fa fa-edit"></i></a>
                          <a onclick="return confirm('bạn có muốn xóa không ?')" href="{!! url('admin/category/delete',$cates->id) !!}"><i class="fa fa-trash-o"></i></a>
                          <!--<a ><i onclick="return $('#myModal').modal('show')" class="fa fa-trash-o"></i></a>-->
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
                              <a href="{!! url('admin/category/delete',$cates->id) !!}""><button type="button" class="btn btn-default" >Đồng ý</button></a>
                            </div>
                          </div>

                        </div>
                      </div>
                    @endforeach
                
                    </tbody>
                  </table>
                  <div class="pull-right">
                    <?php $listCate->setPath('list'); ?>
                    <?php echo $listCate->render(); ?>                 
                  </div>
                    
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section>
    
@stop