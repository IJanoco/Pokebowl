@extends('layouts.masterpageadmin')

@section('content')
@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection

  <div class="col-12 grid-margin stretch-card">
    
      <div class="card">        
        <div class="card-body">
          <div class="d-flex justify-content-end mb-3">
            <button type="submit" class="btn btn-primary btn-fw"  data-toggle="modal" data-target="#createProduct">
              <span class="fas fa-plus"></span>
            </button>
          </div>
          <div class="table-responsive">         
            <table id="productos" class="table table-striped table-bordered data-table" style="width:100%"">
             
              <thead class="bg-secondary" >
                <tr>
                  <th> Id </th>
                  <th> Nombre </th>
                  <th> Descripción </th>
                  <th> Precio </th>
                  <th> Tipo</th>
                  <th> Image</th>
                  <th> Editar </th>
                  <th> Eliminar </th>
                </tr>
              </thead>
              
              <tbody>
                @foreach($products as $item)

                  <tr>
                    <td> {{$loop ->iteration}} </td>
                    <td> {{$item->name}} </td>
                    <td> {{$item->description}}</td>
                    <td> {{number_format($item->price,2)}} </td>
                    <td> {{$item->type_product->type}}</td>  
                    <td> <img src="{{$item->url_img}}" class="avatar" alt=""></td>                  
                    <td>                                                       
                        <button type="submit" class="btn-md btn-warning btn-fw alertEdit" data-toggle="modal" data-url="{{ url('product/'. $item->id ) }}"
                           data-target="#editProduct" data-send="{{route('product.edit.ajax', $item)}}">
                            <span class="fas fa-pen"></span>     
                        </button>                      
                    </td>
                    <td>
                    <form class="alertDelete" method="POST" action="{{ url('/product' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn-md btn-danger btn-fw" data-toggle="modal" data-target="#deleteProduct{{$item->id}}">
                        <span class="fa fa-trash"></span>
                    </button>
                   
                  </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

@section('js')
<script src="{{asset('assetsadmin/dist/assets/modules/modals.js')}}"></script>
<script src="{{asset('assetsadmin/dist/assets/modules/datatables_now/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assetsadmin/dist/assets/modules/datatables_now/dataTables.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('assetsadmin/dist/assets/js/alerts.js')}}"></script>
<script src="{{asset('assetsadmin/dist/assets/js/hidenmodals.js')}}"></script>

<script>
  new DataTable('#productos');
</script>
@include('viewsadmin.alerts')
@endsection  
@section('modals')
@include('viewsadmin.products.create')
@include('viewsadmin.products.edit') 

@endsection
@endsection