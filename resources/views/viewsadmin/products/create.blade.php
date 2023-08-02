<!--MODAL REGISTRAR PRODUCTO-->
<div class="modal fade" id="createProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
          
                  <input type="text" name="name" id="name"  class="form-control"></br>
          
                  <label>Descripción:</label></br>
          
                  <input type="text" name="description" id="description" class="form-control"></br>
          
                  <label>Precio:</label></br>
          
                  <input type="text" name="price" id="price" class="form-control"></br>
          
                  <label>Imagen:</label></br>
                  <input type="file" name="url_img" id="url_img" class="form-control"></br>
                  
                  <input type="hidden" name="id_type" value="3" class="form-control">

                  
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" value="Register">Registrar Producto</button>
        </div>
      </form>
      </div>
    </div>
  </div>

