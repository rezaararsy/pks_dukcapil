<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perjanjian Kerja Sama</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/master.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">


  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #D9D9D9;
  ">
    <!-- Brand Logo -->
    <a href="" class="brand-link text-sm">
      <img src="{{asset('assets/images/logo.png')}}"
           alt="logo"
           class="brand-image img-square elevation-3"
           style="opacity: 1;width:auto; height:50px;margin-left:10px">
      <span class="brand-text font-bold-medium" style="color: black; font-size:14pt; font-weight:900">Perjanjian Kerja Sama</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/default-pp.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a style=color:black;font-size:clamp(15px,15vw,15px);font-weight:700; >{{{ucwords(isset(Auth::user()->username) ? Auth::user()->username : Auth::user()->username )}}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{route('home')}}" class="nav-link" style="color: white; text-align:center; background: rgba(85, 94, 143, 0.65);
            ; border-radius:10px;">
              <i class="nav-icon fas fa-tachometer-alt" style="color:black"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('kontens.showadmin')}}" class="nav-link" style="color: white; text-align:center; background: rgba(85, 94, 143, 0.65);
            ; border-radius:10px;">
              <i class="nav-icon fas fa-th" style="color:black"></i>
              <p>
                Data Perjanjian
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('kontens.tambah')}}" class="nav-link" style="color: white; text-align:center; background: rgba(85, 94, 143, 0.65);
            ; border-radius:10px;">
              <i class="nav-icon fas fa-edit" style="color:black"></i>
              <p>
                New Data
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('logout') }}" class="nav-link" style="margin-top:40px ;color: white; text-align:center; background-color: #FB1C1CC7; border-radius:10px;" >
              <p>
                Log Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="text-align: right">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="background: rgba(41, 53, 117, 0.9);">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-xl-12">
            <h1 style="color: white;">Database Pencatatan Perjanjian Kerja Sama</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        {{-- <div class="card-header">
          <h3 class="card-title">Pemrograman Web</h3> --}}

          {{-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div> --}}
        {{-- </div> --}}
        <div class="card-body" style="background:rgba(217, 217, 217, 1); min-height:90vh">
            @yield('main')
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer"> --}}
          {{-- Pemrograman Web --}}
        {{-- </div> --}}
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  {{-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.1
    </div>
    <strong>Copyright &copy; 2014-2019.</strong> All rights
    reserved.
  </footer> --}}

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>
</body>
</html>
