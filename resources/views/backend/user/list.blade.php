@extends('backend.master')
@section('controller','User')
@section('action','Danh sách')
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
                        <th>Username</th>
                        <th>Email</th>
                        <th>Họ Tên</th>
                        <th>SĐT</th>
                        <th>Địa Chỉ</th>
                        <th>Level</th>
                        <th>Ngay Tham Gia</th>
                        <th style="width:8%">Thao tác</th>
                        <th>abc</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($listUser as $user)
                    @if ($user->level == 1 && $user->firstname == Auth::user()->firstname)
                    <a href="{!! url('admin/user/add') !!}"><button style="margin-bottom:10px;" type="button" class="btn btn-success">Thêm Mới</button></a>
                    @endif
                      <tr
                      @if ($user->level == 1 && $user->firstname == Auth::user()->firstname || $user->level == 0 && $user->firstname == Auth::user()->firstname )
                      style = "color:pink"
                      @endif
                      >
                        <td>
                            {!! $user->username !!}
                        </td>
                        <td>
                            {!! $user->email !!}
                        </td>
                         <td>
                            {!! $user->firstname !!}
                        </td>
                        <td>
                            {!! $user->phone !!}
                        </td>
                        <td>
                            {!! $user->address !!}
                        </td>
                        <td
                        @if ($user->level == 1)

                            style = "color:red"
                          @else
                            style = "color:green"
                          @endif
                         >
                          @if ($user->level == 1)
                            {!! "Admin" !!}
                          @else
                            {!! "Nhân Viên" !!}
                          @endif
                        </td>
                        <td>{!! $user->created_at->format('d-m-Y') !!}</td>
                        <td align="center">
                         @if ($user->level == 1 && $user->firstname == Auth::user()->firstname || $user->level == 0 && $user->firstname == Auth::user()->firstname )
                            <a href="{!! url('admin/user/edit',$user->id) !!}"><i class="fa fa-edit"></i></a>
                          @elseif ($user->level == 1 || $user->level == 0)
                            <p>
                              @if($user->level == 1)
                                {!! "Admin" !!}
                              @else
                                {!! "Nhân Viên" !!}
                              @endif
                            </p>
                          @else                     
                          <a href="{!! url('admin/user/edit',$user->id) !!}"><i class="fa fa-edit"></i></a>
                          <a onclick="return confirm('bạn có muốn xóa không ?')" href="{!! url('admin/user/delete',$user->id) !!}"><i class="fa fa-trash-o"></i></a>
                          @endif
                        </td>
                        <td>
                        @if ($user->level == Auth::user()->level )
                        {{""}}
                        @elseif ($user->level == 0)
                        <a onclick="return confirm('bạn có muốn xóa không ?')" href="{!! url('admin/user/delete',$user->id) !!}"><i class="fa fa-trash-o"></i></a>
                        @else
                        {{""}}
                        @endif
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
                              <a href="{!! url('admin/user/delete',$user->id) !!}"><button type="button" class="btn btn-default" >Đồng ý</button></a>
                            </div>
                          </div>
                      </div>
                    </div>
                    @endforeach
                
                    </tbody>
                  </table>
                   <div class="pull-right">
                    <?php $listUser->setPath('list'); ?>
                    <?php echo $listUser->render(); ?>                 
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        
        </section>
    
@stop