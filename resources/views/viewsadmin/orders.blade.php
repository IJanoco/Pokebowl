@extends('layouts.masterpageadmin')

@section('content')

<div class="col-12 grid-margin stretch-card">
    
  <div class="card">        
    <div class="card-body">
      <div class="table-responsive">

        <table id="pedidos" class="table table-striped table-bordered" style="width:100%"">
        
          </div>
          <thead class="bg-light" >
            <tr>
              <th> Id de Pedido </th>
              <th> Nombre del cliente </th>
              <th> Dirección de cliente </th>
              <th> Tipo de Entrega </th>
            </tr>
          </thead>
          
          <tbody>
            @foreach($orders as $item)

              <tr>
                <td> {{$loop ->iteration}} </td>
                <td> {{$item->delivery_type}} </td>
                <td> {{$item->id_customer}} </td>                     
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection