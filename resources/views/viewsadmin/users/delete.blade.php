  <!--ELIMINAR TIPO DE PRODUCTO-->
  <div class="modal fade" id="deleteUser{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">ELIMINAR USUARIO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
                @csrf                  
              
                <label>Nombre:</label></br>
          
                <input type="text" name="name" id="name" value="{{$item->name}}" class="form-control" disabled></br>

                <label>Apellido:</label></br>
        
                <input type="text" name="last_name" id="last_name" value="{{$item->last_name}}"  class="form-control" disabled></br>
        
                <label>Correo:</label></br>
        
                <input type="email" name="email" id="email" value="{{$item->email}}"  class="form-control" disabled></br>

                <label>Dirección:</label></br>
        
                <input type="text" name="address" id="address" value="{{$item->address}}"  class="form-control" disabled></br>

                <label>Código Postal:</label></br>
        
                <input type="text" name="postal_code" id="postal_code" value="{{$item->postal_code}}"  class="form-control" disabled></br>

                <label>Teléfono:</label></br>
        
                <input type="text" name="phone" id="phone" value="{{$item->phone}}"  class="form-control" disabled></br>

                <label>DNI:</label></br>
        
                <input type="text" name="dni" id="dni" value="{{$item->dni}}"   class="form-control" disabled></br>
                                
                <form class="alertDelete" method="POST" action="{{ url('/user' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                    @method('DELETE')
                    @csrf
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button ttype="submit" class="btn btn-danger btn-sm" title="Delete Student">Eliminar Usuario</button>
                    </div>
                 
                </form>
       
        </div>
        
      </div>
    </div>
  </div>