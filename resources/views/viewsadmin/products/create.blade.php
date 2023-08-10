<!--MODAL REGISTRAR PRODUCTO-->
<div class="modal fade" id="createProduct" tabindex="-1" role="dialog" aria-labelledby="CrearProducto" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">REGISTRAR NUEVO PRODUCTO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{url('product')}}" method="post" enctype="multipart/form-data">
          <div class="modal-body">
                  @csrf
                  <label>Nombre:</label></br>
          
                  <input type="text" name="name" id="name"  class="form-control" required></br>
          
                  <label>Descripción:</label></br>
          
                  <input type="text" name="description" id="description" class="form-control" required></br>
          
                  <label>Precio:</label></br>
          
                  <input type="text" name="price" id="price" class="form-control" required></br>
          
                  <label>Imagen:</label></br>
                  <input type="file" name="url_img" id="url_img" class="form-control" required></br>
                  
                  <label for="tipo_producto">Tipo de Producto:</label></br>
                  <select name="id_type" id="id_type" class="form-control" required>
                    <option value="" disabled selected>Seleccionar tipo de producto</option>
                      @foreach ($typeproducts as $item)
                          <option value="{{ $item->id }}">{{ $item->type }}</option>
                      @endforeach
                  </select>
                  
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" value="Register">Registrar Producto</button>
        </div>
      </form>
      </div>
    </div>
  </div>

