 <!--EDITAR TIPO DE PRODUCTO-->
 <div class="modal fade" id="editUser{{$item->id}}" tabindex="-1" aria-labelledby="EditarProducto" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">EDITAR USUARIO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="alertEdit" action="{{ url('user/'. $item->id ) }}" method="post">
          <div class="modal-body">             
                  @csrf
          
                  @method("PATCH")
          
                  <label>Nombre:</label></br>
          
                  <input type="text" name="name" value="{{$item->name}}" class="form-control"></br>

                  <label>Apellido:</label></br>
          
                  <input type="text" name="last_name" value="{{$item->last_name}}"  class="form-control"></br>
          
                  <label>Correo:</label></br>
          
                  <input type="email" name="email" value="{{$item->email}}"  class="form-control"></br>

                  <label>Dirección:</label></br>
          
                  <input type="text" name="address" value="{{$item->address}}"  class="form-control"></br>

                  <label>Código Postal:</label></br>
          
                  <input type="text" name="postal_code" value="{{$item->postal_code}}"  class="form-control"></br>

                  <label>Teléfono:</label></br>
          
                  <input type="text" name="phone" value="{{$item->phone}}"  class="form-control"></br>

                  <label>DNI:</label></br>
          
                  <input type="text" name="dni" value="{{$item->dni}}"   class="form-control"></br>
                                  
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" value="Update">Guardar Cambios</button>
        </div>
      </form>
      </div>
    </div>
  </div>
