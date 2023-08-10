@extends('layouts.masterpage')

@section('content')
@section('css')
<link rel="stylesheet" href="{{asset('assetscustomer/assets/css/style.css')}}">
@endsection
<section class="shopping-cart dark">
    <div class="container">
     
       <div class="content">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                   
                    @foreach($cart as $item)
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid mx-auto d-block image" src="{{ $item->product->url_img }}">
                        </div>
                        <div class="col-8">
                            <div class="info">
                                <div class="row">
                                    <div class="col-md-5 product-name">
                                        <div class="text-center">
                                            {{ $item->product->name }}
                                        </div>
                                    </div>
                                    <div class="col-md-4 quantity">
                                        <label>Cantidad:</label>
                                        <input type="number" value="{{ $item->quantity }}" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <br>
                                        <span>{{ $item->product->price }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                       
                   
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="summary">
                        <h3>Detalle del Carrito</h3>
                        <div class="summary-item"><span class="text">Subtotal</span><span class="price">$360</span></div>
                        
                        <div class="summary-item"><span class="text">Total</span><span class="price">$360</span></div>
                        <button type="button" class="btn btn-primary btn-lg btn-block">Checkout</button>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>

@endsection