@extends('layouts.masterpageadmin')

@section('content')
@include('viewsadmin.typeProducts.create')
            <div class="col-12 grid-margin stretch-card">
                
                <div class="card">        
                <div class="card-body">
                    <div class="table-responsive">
                    
                        <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary btn-fw"  data-toggle="modal" data-target="#createTypeProduct">
                            <span class="mdi mdi-cart-plus"></span>
                        </button>
                        </div>

                    <br>
                    <table id="productos" class="table table-striped table-bordered" style="width:100%"">
                        <thead>
                        <tr>
                            <th> Id </th>
                            <th> Tipo </th>
                        </tr>
                        </thead>                       
                        <tbody>
                        @foreach($typeproducts as $item)
                            <tr>
                            <td> {{$loop ->iteration}} </td>
                            <td> {{$item->type}} </td>                 
                            <td>
                                @include('viewsadmin.typeProducts.edit')                                                         
                                <button type="submit" class="btn-md btn-warning btn-fw" data-toggle="modal" data-target="#editTypeProduct{{$item->id}}">
                                    <span class="mdi mdi-pencil"></span>     
                                </button>                      
                            </td>
                            <td>    
                                @include('viewsadmin.typeProducts.delete')                            
                                <button type="submit" class="btn-md btn-danger btn-fw" data-toggle="modal" data-target="#deleteTypeProduct{{$item->id}}">
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