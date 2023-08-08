<!--EDITAR USUARIO-->
<div class="modal fade" id="editProfile" tabindex="-1" aria-labelledby="EditarUsuario" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">EDITAR PERFIL</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="alertEdit" action="{{ route('edit.profile', Auth::user()) }}" method="post" >
            @csrf
            @method("PATCH")  
          <div class="modal-body">             
                  <div class="row">
                    <div class="col-6">
                      <label>Nombre:</label></br>
              
                      <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control"></br>
                    </div>
                    <div class="col-6">
                      <label>Apellido:</label></br>

                      <input type="text" name="last_name" value="{{Auth::user()->last_name}}"  class="form-control"></br>
                    </div>
                  </div>
                  <label>Correo:</label></br>
          
                  <input type="email" name="email" value="{{Auth::user()->email}}"  class="form-control"></br>

                  <div class="row">
                    <div class="col-6">                  
                      <label>Teléfono:</label></br>
          
                      <input type="text" name="phone" value="{{Auth::user()->phone}}"  class="form-control"></br>
                    </div>
                    <div class="col-6">
                      <label>Código Postal:</label></br>
            
                      <input type="text" name="postal_code" value="{{Auth::user()->postal_code}}"  class="form-control"></br>
                    </div>
                  </div>

                    <label>Dirección:</label></br>
        
                    <input type="text" name="address" value="{{Auth::user()->address}}"  class="form-control"></br>
                
                    <label>DNI:</label></br>
    
                    <input type="text" name="dni" value="{{Auth::user()->dni}}"   class="form-control"></br>

                                  
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" data-toggle="modal" class="btn btn-primary" value="Update">Guardar Cambios</button>
        </div>
      </form>
      </div>
    </div>
  </div>