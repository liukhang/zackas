@extends('backend.master')
@section('controller','Sản phẩm')
@section('action','Danh sách')
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
                        <th>Tên danh mục</th>
                        <th>Giá</th>
                        <th>Hình ảnh</th>
                        <th>Users</th>
                        <th>Ngày thêm mới</th>
                         <th>Số Lượng  </th>
                        <th>Category</th>
                        <th style="width:8%">Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($arrProduct as $product)
                      <tr>
                        <td>{!! $product->name !!}</td>
                        <td>
                          <?php
                            if($product->pricesale > 0){
                              echo "<p>".number_format($product->pricesale,0,',','.')."đ</p>";
                              echo "<s style='font-size:12px; color:red'>".number_format($product->price,0,',','.')."đ</s>";
                            }else{
                              echo number_format($product->price,0,',','.')."đ";
                            }
                          ?>
                        </td>
                        <td>
                          <img src="{!! asset('public/upload/'.$product->image) !!}" width="40" alt="{!! $product->name !!}">
                        </td>
                        <td>
                        <?php
                              $puser = DB::table('users')->where('id',$product->user_id)->first();
                              echo $puser->username;
                          ?>
                        </td>
                        <td>{!! $product->updated_at->format('d-m-Y, g:i a') !!}</td>
                         <td>
                         @if($product->qty > 0)
                         {!! $product->qty!!}
                         @else
                         Hết hàng
                         @endif
                         </td>
                        <td>
                          <?php
                              $pdata = DB::table('categories')->where('id',$product->cate_id)->first();
                              echo $pdata->name;
                          ?>
                        </td>
                        <td align="center">
                          <a href="{!! url('admin/product/edit',$product->id) !!}"><i class="fa fa-edit"></i></a>
                           <a onclick="return confirm('bạn có muốn xóa không ?')" href="{!! url('admin/product/delete',$product->id) !!}"><i class="fa fa-trash-o"></i></a>
                          <!--<a onclick="return $('#myModal').modal('show')" ><i class="fa fa-trash-o"></i></a>-->
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
                              <a href={!! url('admin/product/delete',$product->id) !!}"><button type="button" class="btn btn-default" >Đồng ý</button></a>
                            </div>
                          </div>

                        </div>
                      </div>
                    @endforeach
                
                    </tbody>
                  </table>
                  <div class="pull-right">
                    <?php $arrProduct->setPath('list'); ?>
                    <?php echo $arrProduct->render(); ?>                 
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        
        </section>
    
@stop