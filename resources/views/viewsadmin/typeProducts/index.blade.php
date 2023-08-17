@extends('layouts.masterpageadmin')

@section('content')
@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection
            <div class="col-12 grid-margin stretch-card">
                
                <div class="card">        
                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3">
                        <button type="submit" class="btn btn-primary btn-fw"  data-toggle="modal" data-target="#createTypeProduct">
                            <span class="fas fa-plus"></span>
                        </button>
                    </div>
                    <div class="table-responsive">
                    
                        <table id="typeProducts" class="table table-striped table-bordered" style="width:100%"">
                            
                            <thead class="bg-secondary">
                            <tr>
                                <th> Id </th>
                                <th> Tipo </th>
                                <th> Editar </th>
                                <th> Eliminar </th>
                            </tr>
                            </thead>                       
                            <tbody>
                            @foreach($typeproducts as $item)
                                <tr>
                                <td> {{$loop ->iteration}} </td>
                                <td> {{$item->type}} </td>                 
                                <td>
                                                                                            
                                    <button type="submit" class="btn-md btn-warning btn-fw" data-toggle="modal" data-url="{{ url('typeproduct/'. $item->id ) }}"
                                         data-target="#editTypeProduct" data-send="{{route('typeproduct.edit.ajax', $item)}}">
                                        <span class="fas fa-pen"></span>     
                                    </button>                      
                                </td>
                                <td>                                                                         
                                    <form class="alertDelete" method="POST" action="{{ url('/typeproduct' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn-md btn-danger btn-fw" data-toggle="modal" data-target="#deleteTypeProduct{{$item->id}}">
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
        $('#typeProducts').DataTable( {
        "language": DataTableEs
    } );
</script>
@include('viewsadmin.alerts')
@endsection

@section('modals')
@include('viewsadmin.typeProducts.create')
@include('viewsadmin.typeProducts.edit') 

@endsection
            
@endsection