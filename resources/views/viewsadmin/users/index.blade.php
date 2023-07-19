@extends('layouts.masterpageadmin')

@section('content')
@include('viewsadmin.users.create')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary btn-fw"  data-toggle="modal" data-target="#createUser">
              <span class="mdi mdi-cart-plus"></span>
            </button>
          </div>
          <table class="table table-dark">
            <thead>
              <tr>
                <th> # </th>
                <th> First name </th>
                <th> Amount </th>
                <th> Deadline </th>
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
                    <button type="submit" class="btn-md btn-warning btn-fw" data-toggle="modal" data-target="#editUser{{$item->id}}">
                        <span class="mdi mdi-pencil"></span>     
                    </button>                      
                </td>
                <td>
                  @include('viewsadmin.users.delete')
                  <button type="submit" class="btn-md btn-danger btn-fw" data-toggle="modal" data-target="#deleteUser{{$item->id}}">
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