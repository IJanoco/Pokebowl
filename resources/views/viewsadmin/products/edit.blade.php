  <!--EDITAR TIPO DE PRODUCTO-->
  <div class="modal fade" id="editProduct" tabindex="-1" aria-labelledby="EditarProducto" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">EDITAR PRODUCTO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="alertEdit" id="edit-products-form" action="" method="post" enctype="multipart/form-data">
          <div class="modal-body">             
                  @csrf
          
                  @method("PATCH")       
                  <label>Nombre:</label></br>
          
                  <input type="text" name="name" id="name" value="" class="form-control name"></br>
          
                  <label>Descripción:</label></br>
          
                  <input type="text" name="description" id="description" value="" class="form-control description"></br>
                  
                  <div class="row">
                    <div class="col-6">
                      <label>Precio:</label></br>
          
                  <input type="text" name="price" id="price" value="" class="form-control price"></br>
                    </div>
                    <div class="col-6">
                      <label>Tipo de Producto:</label></br>

                      <select name="id_type" id="id_type" class="form-control">
                        
                          @foreach ($typeproducts as $item)
                              <option value="{{ $item->id }}">{{ $item->type }}</option>
                          @endforeach
                      </select>  
                  </div>

                  <label>Producto Imagen:</label></br>
          
                  <input type="file" name="url_img" id="url_img" value="" class="form-control url_img" required></br>
                  <img id="previewImage" class="avatar"
                        alt="Vista previa de la imagen" src="">


                      
                                  
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" id="save" >Guardar Cambios</button>
        </div>
      </form>
      </div>
    </div>
  </div>


