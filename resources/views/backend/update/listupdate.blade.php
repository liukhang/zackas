@extends('backend.master')
@section('controller','Sản phẩm')
@section('action','Cập nhật số lượng sản phẩm')
@section('sanpham','active')
@section('list_sp', 'active')
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
                        <th>Id </th>
                        <th>Tên Sp </th>
                        <th>Số Lượng  </th>
                        <th>Số Lượng Bán  </th>
                        <th style="width:8%">Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($update as $product)
                      <?php 
                      $data = DB::table("chitiethoadons")->where('id_sanpham',$product->id)->sum('soluong');
                      ?>
                      <tr>
                        <td>{!! $product->id !!}</td>
                        <td>{!! $product->name !!}</td>
                        <td>{!! $product->qty !!}</td>
                        <td>{!! $product->soluong !!}</td>
                        <td align="center">
                          <a href="{!! url('admin/update/getUpdate/'.$product->id.'/'.$product->qty.'/'.$data) !!}"><i class="fa fa-edit"></i></a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                    <div class="pull-right">
                        <?php $update->setPath('listupdate'); ?>
                        <?php echo $update->render(); ?>                 
                    </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        
        </section>
    
@stop