@extends('layouts.masterpage')

@section('css')
<link rel="stylesheet" href="{{asset('assetsadmin/dist/assets/modules/fontawesome/css/all.min.css')}}">
@endsection
@section('content')
    <br>
    <div class="container d-flex justify-content-center">
        <div class="col-8 grid-margin stretch-card ">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Información del Perfil</h4>      
                                                 
                                <div class="row">
                                    <div class="col-6">
                                        <label>Nombre:</label>
                                        <input type="text" class="form-control" value="{{Auth::user()->name}}" disabled>
                                    </div>
                                    <div class="col-6">
                                        <label>Apellido:</label>
                                        <input type="email" class="form-control" value="{{Auth::user()->last_name}}" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Correo:</label>
                                    <input type="email" class="form-control" value="{{Auth::user()->email}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Dirección:</label>
                                    <input type="email" class="form-control" value="{{Auth::user()->address}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Código Postal:</label>
                                    <input type="email" class="form-control" value="{{Auth::user()->postal_code}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Teléfono:</label>
                                    <input type="email" class="form-control" value="{{Auth::user()->phone}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>DNI:</label>
                                    <input type="email" class="form-control" value="{{Auth::user()->dni}}" disabled>
                                </div>
                                @include('viewscustomer.profile.edit')
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editProfile" >
                                     <span class="fas fa-pen"></span>     
                                 </button>
                                               
             
                    
                </div>
            </div>
        </div>
    </div>
    <br>

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('assetsadmin/dist/assets/js/alerts.js')}}"></script>
@include('viewsadmin.alerts')
@endsection


@endsection