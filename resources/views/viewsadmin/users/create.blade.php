<!--MODAL REGISTRAR USUARIO-->
<div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">REGISTRAR NUEVO USUARIO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{url('user')}}" method="post">
          <div class="modal-body">
                  @csrf
                  <div class="row">
                    <div class="col-6">
                      <label>Nombre:</label></br>
              
                      <input type="text" name="name" class="form-control"></br>
                    </div>
                    <div class="col-6">
                      <label>Apellido:</label></br>
              
                      <input type="text" name="last_name" class="form-control"></br>
                    </div>
                  </div>
                  <label>Correo:</label></br>
          
                  <input type="email" name="email" class="form-control"></br>

                  <div class="row">
                    <div class="col-6">
                      <label>Contraseña:</label></br>
          
                      <input type="password" name="password" class="form-control"></br>
                    </div>
                    <div class="col-6">
                      <label>Confirmar Contraseña</label></br>

                      <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"></br>
                    </div>
                  </div>
                  <label>Dirección:</label></br>
          
                  <input type="text" name="address" class="form-control"></br>

                  <div class="row">
                    <div class="col-6">
                      <label>Código Postal:</label></br>
          
                      <input type="text" name="postal_code" class="form-control"></br>
                    </div>
                    <div class="col-6">
                      <label>Teléfono:</label></br>
          
                      <input type="text" name="phone" class="form-control"></br>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-6">
                      <label>DNI:</label></br>
          
                    <input type="text" name="dni" class="form-control"></br>
                    </div>
                    <div class="col-6">
                      <label>Tipo de Usuario:</label></br>

                      <select name="id_type" id="id_type" class="form-control">
                        <option value="" disabled selected>Seleccionar usuario</option>
                        @foreach ($typeusers as $item)
                            <option value="{{ $item->id }}">{{ $item->type }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  
          
                  
          
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" value="Register">Registrar Usuario</button>
        </div>
      </form>
      </div>
    </div>
  </div>