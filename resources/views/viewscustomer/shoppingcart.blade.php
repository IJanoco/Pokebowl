@extends('layouts.masterpage')

@section('content')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
@endsection
    <div class="col-9 container-fluid d-flex justify-content-center mt-3">
            <div id="div-prods"class="col-5 container-fluid">
                @foreach($cart as $item)
                        <div class="row border border-secondary rounded mb-3 bg-light" data-product-id="{{ $item->product->id }}">
                            <div class="col-3 d-flex justify-content-center align-items-center">
                                <img class="m-4 img-thumbnail img-fluid" src="{{ $item->product->url_img }}">
                            </div>
                            <div class="col-7">
                                <div class="row">
                                    <div class="col-6 mb-4 float-start mt-4">
                                            {{ $item->product->name }}
                                    </div>                                   
                                </div>    
                                <div class="row pl-1">
                                    <div class="col-3 ">
                                        S/ {{ number_format($item->product->price,2) }}
                                    </div>
                                   
                               
                                    <!-- Para cada producto en el carrito -->
                                    <div class="input-group mb-3 col-7">
                                        <button class="input-group-text decrement-btn fa fa-minus" data-product-id="{{ $item->product->id }}"></button>
                                        <input type="text" class="form-control quantity-input qty-input input_qty_{{ $item->product->id }}" value="{{ $item->quantity }}" data-product-id="{{ $item->product->id }}">
                                        <button class="input-group-text increment-btn fa fa-plus" data-product-id="{{ $item->product->id }}"></button>
                                    </div>

                                   
                                    

                                    <div class="col-2 mb-3 d-flex justify-content-end">                                       
                                            <button type="button" class="btn btn-danger delete-cart-product" data-id_product="{{ $item->product->id }}">
                                              <span class="fa fa-trash"></span>
                                            </button>                                       
                                    </div>
                                </div>    
                            </div>
                        </div>
                @endforeach
            </div> 
            
            <div class="col-5 container-fluid">
                          
                <table class="table">
                    <thead>                    
                        <tr>
                            <th> Productos </th>
                            <th> Cantidad </th>
                            <th> Subtotal </th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @foreach($cart as $carts)
                            <tr class="trdelete" data-product-id="{{ $carts->product->id }}">
                                <td> {{ $carts->product->name}} </td>
                                <td> 
                                    <input type="text" class="border border-white bg-white qty-input input_qty_{{ $carts->product->id }}" value="{{ $carts->quantity }}" data-product-id="{{ $carts->product->id }}" disabled>
                                </td>
                                
                                 <td class="subtotal" data-product-id="{{ $carts->product->id }}">S/{{ number_format($carts->product->price * $carts->quantity, 2) }}</td>
                            </tr>
                        @endforeach
                            <tr>
                                <td colspan="2"> Total </td>
                                <td  id="total"> S/{{ number_format($cart->sum(function($carts) {
                                    return $carts->product->price * $carts->quantity;
                                }), 2) }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <select id="delivery_type" class="form-control form-control-sm">
                                        <option value="Envío a domicilio" >Envío a domicilio</option>
                                        <option value="Recojo en tienda" >Recojo en tienda</option>
                                    </select>
                                <td colspan="2">
                                    <button type="button" class="btn btn-warning text-white btn-block store-order">REALIZAR PEDIDO</button>

                                </td>
                            </tr>
                  
                    </tbody>
                </table>
                
                              
            </div>
            
        
    </div>

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('assetscustomer/js/cart.js')}}"></script>

@endsection

@endsection