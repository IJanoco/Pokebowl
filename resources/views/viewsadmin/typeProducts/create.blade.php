<!--MODAL REGISTRAR TIPO PRODUCTO-->
<div class="modal fade" id="createTypeProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">REGISTRAR NUEVO PRODUCTO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{url('typeproduct')}}" method="post">
          <div class="modal-body">
                  @csrf
                  <label>Tipo:</label></br>
          
                  <input type="text" name="type" id="type"  class="form-control"></br>
          
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" value="Register">Registrar Producto</button>
        </div>
      </form>
      </div>
    </div>
  </div>

