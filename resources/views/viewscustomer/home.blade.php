@extends('layouts.masterpage')

@section('content')
<div class="bg-box">
    <img src="{{asset('assetscustomer/img/bg-principal.jpg')}}" alt="">
  </div>
<section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container ">
            <div class="row">
              <div class="col-md-7 col-lg-6 ">
                <div class="detail-box">
                  <h1>
                    Platillos con ingredientes distribuidos
                  </h1>
                  <p>
                    Tras los largos años de experiencia nuestra sucursal es finalmente capaz de abrir las puertas a la atención virtual hacia nuestro público, ven y vive la experiencia de tener tu pokebowl al alcance de tu mano. 
                  </p>
                  <div class="btn-box">
                    <a href="{{route('menu')}}" class="btn1">
                      Pide ya!
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <div class="container ">
            <div class="row">
              <div class="col-md-7 col-lg-6 ">
                <div class="detail-box">
                  <h1>
                    Dieta balanceada
                  </h1>
                  <p>
                    Nuestros platillos establecidos tienen el propósito de otorgar a nuestro cliente una alimentación adecuada bajo en calorías para cuidar de su salud, encuentra nuestras dietas veganas ahora!
                  </p>
                  <div class="btn-box">
                    <a href="{{route('menu')}}" class="btn1">
                      Quiero ver!
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-md-7 col-lg-6 ">
                <div class="detail-box">
                  <h1>
                    Algo dulce para el corazón♥
                  </h1>
                  <p>
                    Otorgamos una pequeña variedad de postres para endulzar el paladar de nuestros clientes, tan dulces como en casa...
                  </p>
                  <div class="btn-box">
                    <a href="{{route('menu')}}" class="btn1">
                      Muéstrame!
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>
    </div>

  </section>

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
  title: '¡Bienvenido, {{ Auth::user()->name }}!'
})
</script>
@endif
@endsection
@endsection

