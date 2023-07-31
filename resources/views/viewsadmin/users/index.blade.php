@extends('layouts.masterpageadmin')

@section('content')
@section('css')
<link rel="stylesheet" href="{{asset('assetsadmin/dist/assets/modules/datatables_now/dataTables.bootstrap4.min.css')}}">
@endsection
@include('viewsadmin.users.create')
<div class="card">
  <div class="card-header">
    <div class="card-header-form col-4">
      <form>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-btn">
            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form>
    </div>
    <div class="d-flex justify-content-end col-8">

      <button type="submit" class="btn btn-primary"  data-toggle="modal" data-target="#createUser">
        <span class="fas fa-user-plus"></span>
      </button>
    </div>

  </div>
    
  <div class="card-body">
    
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
                  @include('viewsadmin.users.edit')                                                         
                    <button type="submit" class="btn-md btn-warning btn-fw alertEdit" data-toggle="modal" data-target="#editUser{{$item->id}}">
                        <span class="fas fa-pen"></span>     
                    </button>                      
                </td>
                <td>
                  @include('viewsadmin.users.delete')
                  <button type="submit" class="btn-md btn-danger btn-fw" data-toggle="modal" data-target="#deleteUser{{$item->id}}">
                    <span class="fas fa-trash"></span>
                </button>
                </td>
              
              </tr>
            @endforeach
            
          </tbody>
      </table>

  </div>
</div>

@section('js')
<script src="{{asset('assetsadmin/dist/assets/modules/datatables_now/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assetsadmin/dist/assets/modules/datatables_now/dataTables.min.js')}}"></script>
<script>
  new DataTable('#table');
</script>
@endsection
    
@endsection