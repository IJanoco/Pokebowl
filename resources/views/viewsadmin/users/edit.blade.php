 <!--EDITAR USUARIO-->
 <div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="EditarUsuario" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">EDITAR USUARIO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="alertEdit" id="edit-users-form" method="post" action="">
          <div class="modal-body">             
                  @csrf
          
                  @method("PATCH")
                  <div class="row">
                    <div class="col-6">
                      <label>Nombre:</label></br>
              
                      <input type="text" name="name" value="" class="form-control name"></br>
                    </div>
                    <div class="col-6">
                      <label>Apellido:</label></br>
              
                      <input type="text" name="last_name" value=""  class="form-control last_name"></br>
                    </div>
                  </div>
                  <label>Correo:</label></br>
          
                  <input type="email" name="email" value=""  class="form-control email"></br>

                  <div class="row">
                    <div class="col-6">                  
                      <label>Teléfono:</label></br>
          
                      <input type="text" name="phone" value=""  class="form-control phone"></br>
                    </div>
                    <div class="col-6">
                      <label>Código Postal:</label></br>
            
                      <input type="text" name="postal_code" value=""  class="form-control postal_code"></br>
                    </div>
                  </div>
                      <label>Dirección:</label></br>
            
                      <input type="text" name="address" value=""  class="form-control address"></br>
                  
                      <div class="row">
                        <div class="col-6">
                          <label>DNI:</label></br>
          
                          <input type="text" name="dni" value=""   class="form-control dni"></br>
        
                        </div>
                        <div class="col-6">
                          <label>Tipo de Usuario:</label></br>

                          <input type="text" name="id_type" value="" class="form-control id_type"></br>
                          
                        </div>
                      </div>
                 
                          
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" value="Update">Guardar Cambios</button>
        </div>
      </form>
      </div>
    </div>
  </div>
