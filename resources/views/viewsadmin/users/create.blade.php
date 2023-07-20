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
                  <label>Nombre:</label></br>
          
                  <input type="text" name="name" id="name"  class="form-control"></br>

                  <label>Apellido:</label></br>
          
                  <input type="text" name="last_name" id="last_name"  class="form-control"></br>
          
                  <label>Correo:</label></br>
          
                  <input type="email" name="email" id="email" class="form-control"></br>
          
                  <label>Contraseña:</label></br>
          
                  <input type="password" name="password" id="password" class="form-control"></br>

                  <label>Confirmar Contraseña</label>

                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme su contraseña">

                  <label>Dirección:</label></br>
          
                  <input type="text" name="address" id="address"  class="form-control"></br>

                  <label>Código Postal:</label></br>
          
                  <input type="text" name="postal_code" id="postal_code"  class="form-control"></br>

                  <label>Teléfono:</label></br>
          
                  <input type="text" name="phone" id="phone"  class="form-control"></br>

                  <label>DNI:</label></br>
          
                  <input type="text" name="dni" id="dni"  class="form-control"></br>
          
                  <!--<label>URL Imagen:</label></br>-->

                  <input type="hidden" name="id_type" value="2" class="form-control">
          
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" value="Register">Registrar Usuario</button>
        </div>
      </form>
      </div>
    </div>
  </div>