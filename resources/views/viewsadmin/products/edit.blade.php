  <!--EDITAR TIPO DE PRODUCTO-->
  <div class="modal fade" id="editProduct{{$item->id}}" tabindex="-1" aria-labelledby="EditarProducto" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">EDITAR PRODUCTO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('product/'. $item->id ) }}" method="post">
          <div class="modal-body">             
                  @csrf
          
                  @method("PATCH")
          
                  <input type="hidden" name="id" id="id" value="{{$item->id}}"/>
          
                  <label>Nombre:</label></br>
          
                  <input type="text" name="name" id="name" value="{{$item->name}}" class="form-control"></br>
          
                  <label>Descripción:</label></br>
          
                  <input type="text" name="description" id="description" value="{{$item->description}}" class="form-control"></br>
          
                  <label>Precio:</label></br>
          
                  <input type="text" name="price" id="price" value="{{$item->price}}" class="form-control"></br>
          
                  <label>URL Imagen:</label></br>
          
                  <input type="text" name="url_img" id="url_img" value="{{$item->url_img}}" class="form-control"></br>
                                  
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" value="Update">Guardar Cambios</button>
        </div>
      </form>
      </div>
    </div>
  </div>


