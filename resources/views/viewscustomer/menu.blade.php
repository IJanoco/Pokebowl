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
            <div class="col-sm-6 col-lg-4 all {{$menu->id_type}}">
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
                        S/{{$menu->price}}
                      </h6>

                      <form action="{{ route('cart.store')}}" method="POST">
                        @csrf
                        @method("POST") 
                            <input type="hidden" value="{{ $menu->id }}" id="id" name="id">
                            <input type="hidden" value="{{ $menu->name }}" id="name" name="name">
                            <input type="hidden" value="{{ $menu->price }}" id="price" name="price">
                            <input type="hidden" value="{{ $menu->url_img }}" id="img" name="img">                       
                            <input type="hidden" value="1" id="quantity" name="quantity">
                          
                        
                          <button type="submit" class="btn-md btn-warning btn-fw text-white rounded-circle">
                            <span class="fa fa-shopping-cart"></span> 
                          </button>
                      </form>
                      
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

@endsection