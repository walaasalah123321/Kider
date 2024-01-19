<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  @include('sweetalert::alert')

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item  {{Request()->routeIs("Admin.Testmonial.create","Admin.Testmonial.show")?'menu-open':''}}">
            <a href="#" class="nav-link  {{Request()->routeIs("Admin.Testmonial.create","Admin.Testmonial.show")?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Testimonil
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Admin.Testmonial.create')}}" class="nav-link {{Request()->routeIs("Admin.Testmonial.create")?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Testimonal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Admin.Testmonial.show')}}" class="nav-link {{Request()->routeIs("Admin.Testmonial.show")?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Testimonal</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item  {{Request()->routeIs("Admin.Teacher.create","Admin.Teacher.show")?'menu-open':''}}">
            <a href="#" class="nav-link  {{Request()->routeIs("Admin.Teacher.create","Admin.Teacher.show")?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Teacher
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Admin.Teacher.create')}}" class="nav-link {{Request()->routeIs("Admin.Teacher.create")?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Teacher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('Admin.Teacher.show')}}" class="nav-link {{Request()->routeIs("Admin.Teacher.show")?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Teacher</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item  {{Request()->routeIs("Admin.Appointment.showAll")?'menu-open':''}}">
            <a href="{{route('Admin.Appointment.showAll')}}" class="nav-link  {{Request()->routeIs("Admin.Appointment.showAll")?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                All Apointment
              </p>
            </a>
           
          </li>
          <li class="nav-item  {{Request()->routeIs("Admin.Contact.showAll")?'menu-open':''}}">
            <a href="{{route('Admin.Contact.showAll')}}" class="nav-link  {{Request()->routeIs("Admin.Contact.showAll")?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Contact Messages

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
  <div class="content-wrapper" style="min-height: 1345.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$namePage}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{$namePage}}</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    
       @yield('content')
        <!-- /.row -->
     
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('admin/dist/js/demo.js')}}"></script> --}}
<!-- DataTables  & Plugins -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
  $(function () {
   
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
