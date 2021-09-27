<!DOCTYPE html>
<html lang="en">
  <head>

    <title>@yield('title')</title>
    <link href="{{ asset('images/logo.png') }}" rel="icon">
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('lib/advanced-datatable/css/jquery.dataTables.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('lib/advanced-datatable/css/jquery.dataTables4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('css/dataTables.bootstrap4.min.css') }}">
<link href="{{ URL::asset('css/dataTables.min.css') }}">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 2;">
              <a href="" class="site_title"><i class="fa fa-laptop"></i> SMKN 1 Cimahi </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../images/ikhwan.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome, {{ Auth::user()->role->namaRule }}</span>
                @if( auth()->check() )
                <h2>{{ Auth::user()->name }}</h2>
                @endif
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li ><a href="{{ route('userapproval') }}"><i class="fa fa-home"></i> Home</a></li>
                  <li><a href="{{ route('usermanagement') }}"><i class="fa fa-user"></i> User </a></li>
                  <li><a href="{{ route('ruang') }}"><i class="fa fa-home"></i> Tempat / ruangan </a></li>
                </ul>
              </div>

              <div class="menu_section">
                <h3>Management Barang</h3>
                <ul class="nav side-menu">
                 <li><a href="{{ route('dept') }}"><i class="fa fa-desktop"></i> Data Inventaris </a></li>
                 <li><a href="{{ route('laporan') }}"><i class="fa fa-file"></i> Catatan Peminjaman </a>
                 <li><a href="{{ route('seluruh') }}"><i class="fa fa-file"></i> Laporan Keseluruhan </a>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../images/ikhwan.png" alt="">{{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{ route('MyProfile') }}"> Profile</a></li>
                    <li><a href="{{ route('signout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          @yield('content')
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>

          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('lib/dataTables.bootstrap4.min.css')}}"></script>
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <script type="text/javascript" language="javascript" src="{{ URL::asset('lib/advanced-datatable/js/jquery.dataTables.js')}}"></script>
  <script type="text/javascript" language="javascript" src="{{ URL::asset('lib/advanced-datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="../vendors/nprogress/nprogress.js"></script>
    <script src="{{ URL::asset('js/datatables.min.js')}}"></script>
    @yield('s')
    <script src="../build/js/custom.min.js"></script>

      <script type="text/javascript">$('.Table').DataTable({
      "language": {
        "search": "Cari :",
        "lengthMenu": "Tampilkan _MENU_ data",
        "zeroRecords": "Tidak ada data",
        "emptyTable": "Tidak ada data",
        "info": "Menampilkan data _START_  - _END_  dari _TOTAL_ data",
        "infoEmpty": "Tidak ada data",
        "paginate": {
          "first": "Awal",
          "last": "Akhir",
          "next": ">",
          "previous": "<"
        }
      }
    });</script>
  </body>
</html>
