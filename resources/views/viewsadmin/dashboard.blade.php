@extends('layouts.masterpageadmin')

@section('content')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <a href="{{ route('user') }}"><h4>Usuarios</h4></a>
            </div>
            <div class="card-body">
              {{ $totalUsers }}
            </div>
          </div>
        </div>
      </div>
    
      <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1 ">
          <div class="card-icon bg-danger">
            <i class="fas fa-bookmark"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <a href="{{ route('typeproduct') }}"><h4>Tipo de Productos</h4></a>
            </div>
            <div class="card-body">
              {{ $totalTypeProducts }}
            </div>
          </div>
        </div>
      </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <a href="{{ route('product') }}"><h4>Productos</h4></a>
            </div>
            <div class="card-body">
              {{ $totalProducts }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-info">
            <i class="fas fa-book"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <a href="{{ route('orders') }}"><h4>Pedidos</h4></a>
            </div>
            <div class="card-body">
              {{ $totalOrders }}
            </div>
          </div>
        </div>
      </div>
</div>  
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="fas fa-dollar-sign"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <a href="{{ route('invoice') }}"><h4>Boletas</h4></a>
          </div>
          <div class="card-body">
            {{ $totalOrders }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-dark">
          <i class="fas fa-city"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <a href="{{ route('company') }}"><h4>Compañía</h4></a>
          </div>
          <div class="card-body">
            Pokebowl Yes!
          </div>
        </div>
      </div>
    </div>
</div>  

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success') == 'Successfully!')

<script>
  const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 1500,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: '¡Bienvenido administrador!'
})
</script>
@endif
@endsection
@endsection