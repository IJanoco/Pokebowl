@extends('layouts.masterpageadmin')

@section('content')
@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection
<div class="col-12 grid-margin stretch-card">
    
  <div class="card">        
    <div class="card-body">
      <div class="table-responsive">

        <table id="orders" class="table table-striped table-bordered data-table" style="width:100%">        
          
            <thead class="bg-secondary" >
              <tr>
                <th> # </th>
                <th> Cliente </th>
                <th> Dirección </th>
                <th> Productos</th>
                <th> Tipo de Entrega </th>
                
              </tr>
            </thead>
            <tbody>
              @foreach($orders as $item)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->user->name }}</td>
                      <td> {{$item->user->address}} </td>
                      <td>
                        <select name="selected_product" class="form-control form-control-sm">
                          <option value="" disabled selected>Ver lista de productos</option>
                          @foreach ($item->product as $product)
                              <option value="{{ $product->id }}">
                                {{$product->name}} (Cantidad: {{$product->pivot->quantity}})
                              </option>
                          @endforeach
                        </select>
                      </td>
                      <td>
                        <form action="{{url('orders/'. $item->id) }}" method="POST">
                          @csrf
                          @method("PATCH")
                          <div class="input-group">
                            <select class="custom-select" name="new_type">
                              <option value="Envío a domicilio" {{ $item->delivery_type === 'Envío a domicilio' ? 'selected' : '' }}>Envío a domicilio</option>
                              <option value="Recojo en tienda" {{ $item->delivery_type === 'Recojo en tienda' ? 'selected' : '' }}>Recojo en tienda</option>
                            </select>
                            <div class="input-group-append">
                              <button class="btn btn-danger fas fa-check" type="submit"></button>
                            </div>
                          </div>
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
<script src="{{asset('assetsadmin/dist/assets/modules/datatables_now/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assetsadmin/dist/assets/modules/datatables_now/dataTables.min.js')}}"></script>
<script>
  new DataTable('#orders');
</script>
@endsection
@endsection