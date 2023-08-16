@extends('layouts.masterpage')

@section('content')
<section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Nuestro Menú
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">Todo</li>
        <li data-filter=".1">Aperitivos</li>
        <li data-filter=".2">Pokebowls</li>
        <li data-filter=".3">Postres</li>
        <li data-filter=".4">Bebidas</li>
      </ul>

      <div class="filters-content">
        <div class="row grid">
          @foreach($menus as $menu)
          
            <div class="col-sm-6 col-lg-4 all {{$menu->id_type}} ">
              
              <div class="box">
                <div>
                  <div class="img-box">
                    <img src="{{$menu->url_img}}" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      {{$menu->name}}
                    </h5>
                    <p>
                      {{$menu->description}}
                    </p>
                    <div class="options">
                      <h6>
                        S/{{number_format($menu->price,2)}}
                      </h6>
                      

                      
                      
                      <button type="button" class="btn-md btn-warning addToCartBtn btn-fw text-white rounded-circle"
                      data-id_product="{{ $menu->id }}" data-qty-input="1" >
                        <span class="fa fa-shopping-cart"></span> 
                      </button>
                      <input type="hidden" value="1" id="quantity" name="quantity" class="qty-input">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
             
         @endforeach
        </div>
      </div>
      
    </div>
  </section>
@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('assetscustomer/js/cart.js')}}"></script>

@endsection
@endsection