<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Quản lý website</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/css/_all-skins.min.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/user/img/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/css/ionicons.min.css') }}">
   <link href="{{ url('public/backend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
   <!-- js ckediter -->
   <script src="{{ url('public/backend/js/jQuery-2.1.4.min.js') }}"></script>
   <script type="text/javascript"> var base_url = "{{ url('/') }}";</script>
   <script src="{{ url('public/backend/js/myscript.js') }}"></script>
   <!-- ckediter và ckfinder -->
    <script type="text/javascript" src="{{ url('public/backend/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/backend/ckfinder/ckfinder.js') }}"></script>
    <script type="text/javascript">
        var baseURL ="{!! url('/') !!}";
    </script>
    <script type="text/javascript" src="{{ url('public/backend/func_ckfinder.js') }}"></script>
    <style>

      .results tr[visible='false'],
      .no-result {
        display: none;
      }

      .results tr[visible='true'] {
        display: table-row;
      }

      .counter {
        padding: 8px;
        color: #ccc;
      }
    </style>
    <!-- end ckediter và ckfinder -->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="{!! url('admin') !!}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>ZACKAS.</b>VN</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li>
                <a href="{!! url('/')!!}" target="new">Xem Website</a>
              </li>                 
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="#" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="#" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="#" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="#" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="#" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Xin chào: {!! Auth::user()->firstname !!} </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{url('administrator/logout')}}" class="btn btn-default btn-flat">Log out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="@yield('trangchu') treeview">
              <a href="{!! url('admin') !!}">
                <i class="fa fa-dashboard"></i> <span>Trang chủ Admin</span>
              </a>
            </li>

            
            <li class="treeview @yield('danhmuc')">
              <a href="javascript:void(0)">
                <i class="fa fa-pencil-square-o"></i> <span>Quản lý danh mục</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="@yield('them_dm')"><a href="{!! url('admin/category/add') !!}"><i class="fa fa-circle-o"></i> Thêm danh mục</a></li>
                <li class="@yield('list_dm')"><a href="{!! url('admin/category/list') !!}"><i class="fa fa-circle-o"></i> Danh sách danh mục</a></li>
              </ul>
            </li>

            <li class="treeview @yield('sanpham')">
              <a href="javascript:void(0)">
                <i class="fa fa-paper-plane-o"></i> <span>Quản lý sản phẩm</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="@yield('them_sp')"><a href="{!! url('admin/product/add') !!}"><i class="fa fa-circle-o"></i> Thêm sản phẩm</a></li>
                <li class="@yield('list_sp')"><a href="{!! url('admin/product/list') !!}"><i class="fa fa-circle-o"></i> Danh sách sản phẩm</a></li>
                <li class="@yield('list_danhgia')"><a href="{!! url('admin/product/listdanhgia') !!}"><i class="fa fa-circle-o"></i> Đánh giá</a></li>
              </ul>
            </li>
            <li class="treeview @yield('hoadon')">
              <a href="javascript:void(0)">
                <i class="fa fa-shopping-cart"></i> <span>Quản lý đơn hàng</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="@yield('list_hd')"><a href="{!! url('admin/cart/list') !!}"><i class="fa fa-circle-o"></i> Danh sách đơn hàng</a></li>
                <li><a href="{!! url('admin/cart/khuyenmai') !!}"><i class="fa fa-circle-o"></i> Nhập mã khuyến mại</a></li>
                <li><a href="{!! url('admin/cart/khuyenmai') !!}"><i class="fa fa-circle-o"></i> Danh sách ID khuyến mại</a></li>

              </ul>
            </li>
            <li class="treeview @yield('tintuc')">
              <a href="javascript:void(0)">
                <i class="fa fa-navicon"></i> <span>Quản lý bài viết</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="@yield('them_tt')"><a href="{!! url('admin/tintuc/add') !!}"><i class="fa fa-circle-o"></i> Thêm bài viết</a></li>
                <li class="@yield('list_tt')"><a href="{!! url('admin/tintuc/list') !!}"><i class="fa fa-circle-o"></i> Danh sách bài viết</a></li>
                <!--<li><a href="{!! url('admin/catenew/add') !!}"><i class="fa fa-circle-o"></i> Thêm danh mục</a></li>-->
              	<!--<li><a href="{!! url('admin/catenew/list') !!}"><i class="fa fa-circle-o"></i> Danh mục bài biết</a></li>-->
              </ul>
            </li>
            <li class="treeview @yield('tintuc')">
              <a href="javascript:void(0)">
                <i class="fa fa-navicon"></i> <span>Quản lý contact</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="@yield('list_ct')"><a href="{!! url('admin/contact/list') !!}"><i class="fa fa-circle-o"></i> Danh sách contact</a></li>               
              </ul>
            </li>
            <li class="treeview @yield('user')">
              <a href="javascript:void(0)">
                <i class="fa fa-pencil-square-o"></i> <span>Quản lý user</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="@yield('list_user')"><a href="{!! url('admin/user/list') !!}"><i class="fa fa-circle-o"></i> Danh sách user</a></li>
                
              </ul>
            </li>
            <li class="treeview">
              <a href="javascript:void(0)">
                <i class="fa fa-gears"></i> <span>Cài đặt website</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{!! url('admin/banner/listbanner') !!}"><i class="fa fa-circle-o"></i> Banner website</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Cấu hình website</a></li>
              </ul>
            </li>
            <!-- end menu -->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @yield('controller')
            <small>@yield('action')</small>
          </h1>
        </section>
                <div class="col-lg-12" style="margin-top:12px;"> 
                        @if(Session::has('flash_message'))
                            <div class="alert alert-{!! Session::get('flash_level') !!}">
                                {!! Session::get('flash_message') !!}
                            </div>
                        @endif
                    </div>
        <!-- Main content -->
          @yield('content')
        <!-- /.content -->

      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 3.0
        </div>
        <strong>Copyright &copy; 2017</strong>
      </footer>
      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    

<script src="{{ url('public/backend/js/app.min.js') }}"></script>
<script src="{{ url('public/backend/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ url('public/backend/js/bootstrap.min.js') }}"></script>
<script src="{{ url('public/backend/Chart.bundle.js') }}"></script>
  <script>
              $(document).ready(function() {
              $(".search").keyup(function() {
                var searchTerm = $(".search").val();
                var listItem = $('.results tbody').children('tr');
                var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

                $.extend($.expr[':'], {
                  'containsi': function(elem, i, match, array) {
                    return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
                  }
                });

                $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e) {
                  $(this).attr('visible', 'false');
                });

                $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e) {
                  $(this).attr('visible', 'true');
                });

                var jobCount = $('.results tbody tr[visible="true"]').length;
                $('.counter').text(jobCount + ' item');

                if (jobCount == '0') {
                  $('.no-result').show();
                } else {
                  $('.no-result').hide();
                }
              });
              $(function() {

                $('#dropzone').on('dragover', function() {
                  $(this).addClass('hover');
                });

                $('#dropzone').on('dragleave', function() {
                  $(this).removeClass('hover');
                });

                $('#dropzone input').on('change', function(e) {
                  var file = this.files[0];

                  $('#dropzone').removeClass('hover');

                  if (this.accept && $.inArray(file.type, this.accept.split(/, ?/)) == -1) {
                    return alert('File type not allowed.');
                  }

                  $('#dropzone').addClass('dropped');
                  $('#dropzone img').remove();

                  if ((/^image\/(gif|png|jpeg)$/i).test(file.type)) {
                    var reader = new FileReader(file);

                    reader.readAsDataURL(file);

                    reader.onload = function(e) {
                      var data = e.target.result,
                        $img = $('<img />').attr('src', data).fadeIn();

                      $('#dropzone div').html($img);
                    };
                  } else {
                    var ext = file.name.split('.').pop();

                    $('#dropzone div').html(ext);
                  }
                });
              });
            });
             
          </script>
         
  </body>
</html>
