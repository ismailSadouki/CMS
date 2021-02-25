<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title> CMS - لوحة التحكم </title>

  <!-- Custom fonts for this template-->
  <link href="{!! asset('theme/vendor/fontawesome-free/css/all.min.css') !!}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{!! asset('theme/css/sb-admin-2.min.css') !!}" rel="stylesheet">
    <style>
        .sidebar.toggled .nav-item .nav-link {
            text-align: center !important;
        }
        .sidebar #sidebarToggle::after {
            content: '\f105';
        }
        .sidebar.toggled #sidebarToggle::after {
            content: '\f104';
        }
    </style>
    @yield('head')
</head>

<body id="page-top" dir="ltr" style="text-align: left">

  <!-- Page Wrapper -->
  <div id="wrapper">
           <!-- Sidebar -->
           <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion " id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <!-- <div class="sidebar-brand-icon">
                    <img style="width:70%" src="
                </div> -->
                العودة للموقع<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link text-left" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span> لوحة التحكم</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">




            <li class="nav-item ">
                <a class="nav-link text-left" href="{{route('posts.index')}}">
                    <i class="fas fa-th-list fa-fw fa-2x text-gray-300"></i>

                    <span>المنشورات </span>
                </a>        
            </li>

           <!--  <li class="nav-item ">
                <a class="nav-link text-left" href="">
                    <i class="fas fa-code fa-fw fa-2x text-gray-300"></i>

                    <span>الأدوار </span>
                </a>        
            </li> -->

            <li class="nav-item ">
                <a class="nav-link text-left" href="{{route('permissions')}}">
                    <i class="fas fa-code fa-2x text-gray-300"></i>

                    <span>الصلاحيات </span>
                </a>        
            </li>

            <li class="nav-item ">
                <a class="nav-link text-left" href="{{route('page.index')}}">
                    <i class="fas fa-list fa-2x text-gray-300"></i>

                    <span>الصفحات </span>
                </a>        
            </li>

            

            <!-- Nav Item - Utilities Collapse Menu -->


            <li class="nav-item ">
                <a class="nav-link text-left" href="{{route('users.index')}}">
                    <i class="fas fa-users fa-2x text-gray-300"></i>

                    <span>المستخدمين</span>
                </a>        
            </li>

        


        <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        {{-- @include('theme.header') --}}
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <div class="mr-4 lead"><b>@yield('heading')</b></div>
            
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                    </svg>
                </button>
            
                <!-- Topbar Navbar -->
                <ul class="navbar-nav mr-auto">
                
                <div class="topbar-divider d-none d-sm-block"></div>
            
                
            
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"> CMS - لوحة التحكم</span>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-left shadow animated--grow-in" style="right:-90px">
                    <a class="dropdown-item text-right" href="#00" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        تسجيل خروج
                    </a>
                    </div>
                </li>
            
                </ul>
            
            </nav>
  <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          @if(Session::has('flash_message'))
              <div class="p-3 mb-2 bg-success text-white rounded text-center">
                  {{ session('flash_message') }}
              </div>  
          @endif
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
          </div>

          @yield('content')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
            <span>جميع الحقوق محفوظة &copy; {{ date('Y') }}</span>
            </div>
        </div>
    </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">هل أنت جاهز للمغادرة؟</h5>
        </div>
        <div class="modal-body">إذا كنت متأكد أنك تريد إنهاء الجلسة اضغط على زر خروج</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">إلغاء</button>
          <a class="btn btn-primary" 
             href="{{ route('logout') }}"
             onclick="event.preventDefault();
             document.getElementById('logout-form').submit();"
          >خروج</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{!! asset('theme/vendor/jquery/jquery.min.js') !!}"></script>
  <script src="{!! asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{!! asset('theme/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{!! asset('theme/js/sb-admin-2.min.js') !!}"></script>

  <!-- Page level plugins -->
  <script src="{!! asset('theme/vendor/chart.js/Chart.min.js') !!}"></script>

  <!-- Page level custom scripts -->
  <script src="{!! asset('theme/js/demo/chart-area-demo.js') !!}"></script>
  <script src="{!! asset('theme/js/demo/chart-pie-demo.js') !!}"></script>
  @yield('script')
</body>

</html>















