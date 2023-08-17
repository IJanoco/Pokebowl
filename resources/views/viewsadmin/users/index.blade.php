@extends('layouts.masterpageadmin')

@section('content')
@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection

<div class="col-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">   
            <div class="table-responsive">
              <div class="d-flex justify-content-end mb-3">
                <button type="submit" class="btn btn-primary"  data-toggle="modal" data-target="#createUser">
                  <span class="fas fa-user-plus"></span>
                </button>
              </div> 
              
                <table id="table" class="table table-striped table-bordered data-table" style="width:100%">
                      <thead class="bg-secondary">
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
                          <td> {{$item->type_user->type}}</td>                   
                          <td>
                                                                      
                              <button type="submit" class="btn-md btn-warning btn-fw" data-toggle="modal" data-url="{{ url('user/'. $item->id ) }}"
                                data-target="#editUser" data-send="{{route('user.edit.ajax', $item)}}">
                                  <span class="fas fa-pen"></span>     
                              </button>                      
                          </td>
                          <td>
                            @if($item->orders->count() === 0)
                                <form class="alertDelete" method="POST" action="{{ url('/user' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn-md btn-danger btn-fw" data-toggle="modal" data-target="#deleteUser{{$item->id}}">
                                        <span class="fas fa-trash"></span>
                                    </button>
                                </form>
                            @else
                                <button class="btn-md btn-danger btn-fw" disabled>
                                    <span class="fas fa-trash"></span>
                                </button>
                            @endif
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
<script src="{{asset('assetsadmin/dist/assets/js/languageDt.js')}}"></script>
<script>
    $('#table').DataTable( {
        "language": DataTableEs
    } );
</script>
  @if(session('error') == 'Error!')
    <script>
      const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 1500,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })

    Toast.fire({
      icon: 'error',
      title: 'No puedes eliminar tu propio usuario'
    })
  </script>
  @endif
@include('viewsadmin.alerts')
@endsection
@section('modals')
@include('viewsadmin.users.edit')
@include('viewsadmin.users.create')
@endsection    


    
@endsection