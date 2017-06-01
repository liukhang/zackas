@extends('backend.master')
@section('controller','Contact')
@section('action','Danh sách')
@section('list_ct', 'active')
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
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Noi dung</th>
                        
                        <th style="width:8%">Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($contact as $cont)
                      <tr>
                        <td>
                            {!! $cont->name !!}
                        </td>
                        <td>
                            {!! $cont->email !!}
                        </td>
                         <td>
                            {!! $cont->content !!}
                        </td>
                        <td align="center">
                        <a onclick="return confirm('bạn có muốn xóa không ?')" href="{!! url('admin/contact/delete',$cont->id) !!}"><i class="fa fa-trash-o"></i></a>
                          <!--<a onclick="return $('#myModal').modal('show')"><i class="fa fa-trash-o"></i></a>-->
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
                              <a href="{!! url('admin/contact/delete',$cont->id) !!}"><button type="button" class="btn btn-default" >Đồng ý</button></a>
                            </div>
                          </div>

                        </div>
                      </div>
                    @endforeach
                
                    </tbody>
                  </table>
                   <div class="pull-right">
                    <?php $contact->setPath('list'); ?>
                    <?php echo $contact->render(); ?>                 
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        
        </section>
    
@stop