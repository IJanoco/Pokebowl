@extends('layouts.masterpageadmin')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="col-8 grid-margin stretch-card ">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Información de la Compañía</h4>
            
            <form class="forms-sample">
            <div class="form-group">
                <label for="exampleInputUsername1">Razón Social:</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="POKEBOWL YES!" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">RUC:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="20745874455610" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Distrito:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="San Isidro" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Dirección:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Mz. Isidro lt2" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Número de Contacto:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="987654321" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Correo Electrónico:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="pokebowlyes@gmail.com" disabled>
            </div>
            
            </div>         
            
            </form>
        </div>
        </div>
</div>

@endsection