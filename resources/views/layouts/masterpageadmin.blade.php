<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>POKE ADMIN</title>
    <!-- plugins:css -->
   
    <link rel="stylesheet" href="{{asset('assetsadmin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetsadmin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assetsadmin/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assetsadmin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetsadmin/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetsadmin/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assetsadmin/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assetsadmin/images/favicon.png')}}" />
    <!-- FONT AWESOME-->
    <script src="https://kit.fontawesome.com/14f5b5e840.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('assetsadmin/images/poke-bowl-icon.png')}}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset('assetsadmin/images/poke-bowl-icon.png')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
       
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('dashboard')}}">
              <span class="menu-icon">
                <i class="fa-solid fa-gauge-high"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('typeproduct')}}">
              <span class="menu-icon">
                <i class="fa-regular fa-chart-bar"></i>
              </span>
              <span class="menu-title">Tipo de Productos</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('user')}}">
              <span class="menu-icon">
                <i class="fa-solid fa-user-plus fa-xs"></i>
              </span>
              <span class="menu-title">Usuarios</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('product')}}">
              <span class="menu-icon">
                <i class="fa-solid fa-cart-shopping"></i>
              </span>
              <span class="menu-title">Productos</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('orders')}}">
              <span class="menu-icon">
                <i class="fa-solid fa-book"></i>
              </span>
              <span class="menu-title">Pedidos</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('invoice')}}">
              <span class="menu-icon">
                <i class="fa-solid fa-dollar-sign"></i>
              </span>
              <span class="menu-title">Boletas</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('company')}}">
              <span class="menu-icon">
                <i class="fa-solid fa-city"></i>
              </span>
              <span class="menu-title">Compañía</span>
            </a>
          </li>
          
         
        
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assetsadmin/images/favicon')}}" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex justify-content-end align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
          
            <ul class="navbar-nav navbar-nav-right">
             
             
            
             
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{asset('assetsadmin/images/faces/face15.jpg')}}" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">

                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <span class="mdi mdi-logout text-danger"></span>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assetsadmin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assetsadmin/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assetsadmin/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('assetsadmin/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('assetsadmin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assetsadmin/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assetsadmin/js/off-canvas.js')}}"></script>
    <script src="{{asset('assetsadmin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assetsadmin/js/misc.js')}}"></script>
    <script src="{{asset('assetsadmin/js/settings.js')}}"></script>
    <script src="{{asset('assetsadmin/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assetsadmin/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->

  </body>
</html>