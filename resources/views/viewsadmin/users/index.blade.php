@extends('layouts.masterpageadmin')

@section('content')
@section('css')
<link rel="stylesheet" href="{{asset('assetsadmin/dist/assets/modules/datatables_now/dataTables.bootstrap4.min.css')}}">
@endsection

<div class="card">
 
    
    
  
  <div class="card-body">   
    <div class="d-flex justify-content-end">
      <button type="submit" class="btn btn-primary"  data-toggle="modal" data-target="#createUser">
        <span class="fas fa-user-plus"></span>
      </button>
    </div> 
      <table id="table" class="table table-striped table-bordered" style="width:100%">
            <thead class="bg-light">
                <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Código Postal</th>
                <th>Teléfono</th>
                <th>DNI</th>
                <th>Tipo de Usuario</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $item)
              <tr>
                <td> {{$loop ->iteration}} </td>
                <td> {{$item->name}} </td>
                <td> {{$item->last_name}}</td>
                <td> {{$item->email}} </td>
                <td> {{$item->address}}</td>  
                <td> {{$item->postal_code}}</td>
                <td> {{$item->phone}}</td>
                <td> {{$item->dni}}</td> 
                <td> {{$item->id_type}}</td>                   
                <td>
                                                                       
                    <button type="submit" class="btn-md btn-warning btn-fw" data-toggle="modal" data-url="{{ url('user/'. $item->id ) }}"
                       data-target="#editUser" data-send="{{route('user.edit.ajax', $item)}}">
                        <span class="fas fa-pen"></span>     
                    </button>                      
                </td>
                <td>
                  <form class="alertDelete" method="POST" action="{{ url('/user' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                    @method('DELETE')
                    @csrf
                      <button type="submit" class="btn-md btn-danger btn-fw" data-toggle="modal" data-target="#deleteUser{{$item->id}}">
                        <span class="fas fa-trash"></span>
                      </button>                
                  </form>
                </td>              
              </tr>
            @endforeach            
          </tbody>
      </table>

  </div>
</div>
@section('modals')
@include('viewsadmin.users.edit')
@include('viewsadmin.users.create')
@endsection
@section('js')
<script src="{{asset('assetsadmin/dist/assets/modules/modals.js')}}"></script>
<script src="{{asset('assetsadmin/dist/assets/modules/datatables_now/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assetsadmin/dist/assets/modules/datatables_now/dataTables.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('assetsadmin/dist/assets/js/alerts.js')}}"></script>
<script>
  new DataTable('#table');
</script>
@include('viewsadmin.alerts')

@endsection

    
@endsection