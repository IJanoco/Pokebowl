@extends('layouts.masterpageadmin')

@section('content')
@include('viewsadmin.products.create')

  <div class="col-12 grid-margin stretch-card">
    
      <div class="card">        
        <div class="card-body">
          <div class="table-responsive">
            
              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary btn-fw"  data-toggle="modal" data-target="#createProduct">
                  <span class="mdi mdi-cart-plus"></span>
                </button>
              </div>

            <br>
            <table id="productos" class="table table-striped table-bordered" style="width:100%"">
              <thead>
                <tr>
                  <th> Id </th>
                  <th> Nombre </th>
                  <th> Descripción </th>
                  <th> Precio </th>
                  <th> Tipo</th>
                  <th> URL Image</th>
                </tr>
              </thead>
              
              <tbody>
                @foreach($products as $item)

                  <tr>
                    <td> {{$loop ->iteration}} </td>
                    <td> {{$item->name}} </td>
                    <td> {{$item->description}}</td>
                    <td> {{$item->price}} </td>
                    <td> {{$item->id_type}}</td>  
                    <td> {{$item->url_img}}</td>                  
                    <td>
                      @include('viewsadmin.products.edit')                                                         
                        <button type="submit" class="btn-md btn-warning btn-fw alertEdit" data-toggle="modal" data-target="#editProduct{{$item->id}}">
                            <span class="mdi mdi-pencil"></span>     
                        </button>                      
                    </td>
                    <td>
                      @include('viewsadmin.products.delete')
                      <button type="submit" class="btn-md btn-danger btn-fw" data-toggle="modal" data-target="#deleteProduct{{$item->id}}">
                        <span class="mdi mdi-delete"></span>
                    </button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   
@endsection