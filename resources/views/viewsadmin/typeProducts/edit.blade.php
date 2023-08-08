<!--EDITAR TIPO DE PRODUCTO-->
<div class="modal fade" id="editTypeProduct" tabindex="-1" aria-labelledby="EditarTipoProducto" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">EDITAR TIPO PRODUCTO</h5>
        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form class="alertEdit" id="edit-typeProducts-form" action="" method="post">
        <div class="modal-body">             
                @csrf
        
                @method("PATCH")     
                <label>Tipo:</label></br>
        
                <input type="text" name="type" value="" class="form-control type"></br>
                                
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="save">Guardar Cambios</button>
        </div>
    </form>
    </div>
    </div>
</div>