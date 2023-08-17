@extends('layouts.masterpageadmin')

@section('content')

@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection
  <div class="col-12 grid-margin stretch-card">
      
    <div class="card">        
      <div class="card-body">
        <div class="table-responsive">
          <table id="invoice" class="table table-striped table-bordered data-table" style="width:100%">        
            </div>
            <thead class="bg-secondary" >
              <tr>
                <th> # </th>
                <th> Cliente </th>               
                <th> Productos</th>
                <th> Total </th>
                <th> Estado de Pago </th>
              </tr>
            </thead>    
            <tbody>
              @foreach($invoice as $item)
                <tr>
                  <td> {{$loop ->iteration}} </td>
                  <td> {{$item->user->name}} </td>                 
                  <td>
                    <select name="selected_product" class="form-control form-control-sm">
                      <option value="" disabled selected>Ver lista de productos</option>
                      @foreach ($item->product as $product)
                          <option value="{{ $product->id }}">
                              {{ $product->name }} (Cantidad: {{ $product->pivot->quantity }}) 
                              Precio Unitario: {{ number_format($product->price, 2) }} 
                              Subtotal: {{ number_format($product->price * $product->pivot->quantity, 2) }}
                          </option>
                      @endforeach
                    </select>
                  </td>
                  <td> 
                    S/{{ number_format($item->product->sum(function($product) {
                      return $product->price * $product->pivot->quantity;
                      }), 2) }}    
                   </td>
                  <td>      
                      <form action="{{url('invoice/'. $item->id) }}" method="POST">
                        @csrf
                        @method("PATCH")
                        <div class="input-group">
                          <select class="custom-select" name="new_status">
                            <option value="Pendiente" {{ $item->status_pay === 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                            <option value="Cancelado" {{ $item->status_pay === 'Cancelado' ? 'selected' : '' }}>Cancelado</option>
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
  <script src="{{asset('assetsadmin/dist/assets/js/languageDt.js')}}"></script>
  <script>
    $('#invoice').DataTable( {
        "language": DataTableEs
    } );
  </script>
  @endsection
@endsection