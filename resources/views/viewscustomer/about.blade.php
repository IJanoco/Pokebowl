@extends('layouts.masterpage')

@section('content')
<section class="about_section layout_padding ">
    <div class="container layout_padding ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{asset('assetscustomer/img/quienes-somos.png')}}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                PokeBowl Yes!
              </h2>
            </div>
            <p>
              Emprendimiento peruano dentro del rubro de la alimentación sana,brindando satisfacción a los clientes
              desde 2019.
              ¡Una amplia oferta de productos de la más alta calidad!
              Prueba y disfruta nuestros deliciosos Bowls, bebidas, ensaladas y postres.
              Aquí podrás comprar tus productos de manera rápida y segura. Te atenderemos 
            </p>
            <a href="">
              Saber más
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection