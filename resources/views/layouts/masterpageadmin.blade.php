<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assetsadmin/dist/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assetsadmin/dist/assets/modules/fontawesome/css/all.min.css')}}">
  
  @yield('css')
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('assetsadmin/dist/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assetsadmin/dist/assets/modules/weather-icon/css/weather-icons.min.css')}}">
  <link rel="stylesheet" href="{{asset('assetsadmin/dist/assets/modules/weather-icon/css/weather-icons-wind.min.css')}}">
  <link rel="stylesheet" href="{{asset('assetsadmin/dist/assets/modules/summernote/summernote-bs4.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assetsadmin/dist/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assetsadmin/dist/assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>

<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <!--<input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
           
            </div>-->
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
         
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            
            <div class="d-sm-none d-lg-inline-block">Bienvenido, {{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">              
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>                           
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2 bg-dark">
        <aside id="sidebar-wrapper">
          <ul class="sidebar-menu">
            <li class="dropdown active">
              <a href="{{ route('dashboard') }}">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="dropdown active">
              <a href="{{ route('user') }}">
                <i class="fas fa-user"></i>
                <span>Usuarios</span>
              </a>
            </li>
            <li class="dropdown active">
              <a href="{{ route('typeproduct') }}">
                <i class="fas fa-bookmark"></i>
                <span>Tipo de Productos</span>
              </a>
            </li>
            <li class="dropdown active">
              <a href="{{ route('product') }}">
                <i class="fas fa-shopping-cart"></i>
                <span>Productos</span>
              </a>
            </li>
            <li class="dropdown active">
              <a href="{{ route('orders') }}">
                <i class="fas fa-book"></i>
                <span>Pedidos</span>
              </a>
            </li>
            <li class="dropdown active">
              <a href="{{ route('invoice') }}">
                <i class="fas fa-dollar-sign"></i>
                <span>Boletas</span>
              </a>
            </li>
            <li class="dropdown active">
              <a href="{{ route('company') }}">
                <i class="fas fa-city"></i>
                <span>Compañía</span>
              </a>
            </li>                     
          </ul>

          
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          @yield('content')
       
          
        
        </section>
      </div>
      
    </div>
  </div>
  @yield('modals')
  <!-- General JS Scripts -->
  <script src="{{asset('assetsadmin/dist/assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('assetsadmin/dist/assets/modules/popper.js')}}"></script>
  <script src="{{asset('assetsadmin/dist/assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('assetsadmin/dist/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assetsadmin/dist/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assetsadmin/dist/assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('assetsadmin/dist/assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{asset('assetsadmin/dist/assets/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
  <script src="{{asset('assetsadmin/dist/assets/modules/chart.min.js')}}"></script>
  <script src="{{asset('assetsadmin/dist/assets/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('assetsadmin/dist/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
  <script src="{{asset('assetsadmin/dist/assets/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{asset('assetsadmin/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
  @yield('js')
  <!-- Page Specific JS File -->
  <script src="{{asset('assetsadmin/dist/assets/js/page/index-0.js')}}"></script>
  
  <!-- Template JS File -->
  <script src="{{asset('assetsadmin/dist/assets/js/scripts.js')}}"></script>
  <script src="{{asset('assetsadmin/dist/assets/js/custom.js')}}"></script>
</body>
</html>