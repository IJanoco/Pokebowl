@extends('layouts.masterpageadmin')

@section('content')
<div class="col-12 grid-margin stretch-card ">
    <div class="card">
      <div class="card-body">
        
        <div class="table-responsive ">
          <table class="table text-white ">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>No. Boleta</th>
                <th>Created</th>
                <th>Estado</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jacob</td>
                <td>53275531</td>
                <td>12 May 2017</td>
                <td><label class="badge badge-danger">Pending</label></td>
              </tr>            
              <tr>
                <td>Peter</td>
                <td>53275534</td>
                <td>16 May 2017</td>
                <td><label class="badge badge-success">Completed</label></td>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection