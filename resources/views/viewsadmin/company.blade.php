@extends('layouts.masterpageadmin')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="col-8 grid-margin stretch-card ">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Información de la Compañía</h4>              
                    <form class="forms-sample">
                        @foreach($company as $company)
                            <div class="form-group">
                                <label>Razón Social:</label>
                                <input type="text" class="form-control" value="{{$company->name}}" disabled>
                            </div>
                            <div class="form-group">
                                <label>RUC:</label>
                                <input type="email" class="form-control" value="{{$company->taxpayer}}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Distrito:</label>
                                <input type="email" class="form-control" value="{{$company->district}}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Dirección:</label>
                                <input type="email" class="form-control" value="{{$company->address}}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Número de Contacto:</label>
                                <input type="email" class="form-control" value="{{$company->phone}}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Correo Electrónico:</label>
                                <input type="email" class="form-control" value="{{$company->email}}" disabled>
                            </div>                       
                        @endforeach                    
                    </form>               
            </div>
        </div>
    </div>
</div>

@endsection