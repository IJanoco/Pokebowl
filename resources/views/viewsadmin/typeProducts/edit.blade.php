<!--EDITAR TIPO DE PRODUCTO-->
<div class="modal fade" id="editTypeProduct{{$item->id}}" tabindex="-1" aria-labelledby="EditarProducto" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">EDITAR TIPO PRODUCTO</h5>
        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form class="alertEdit" action="{{ url('typeproduct/'. $item->id ) }}" method="post">
        <div class="modal-body">             
                @csrf
        
                @method("PATCH")
        
                <input type="hidden" name="id" id="id" value="{{$item->id}}"/>
        
                <label>Tipo:</label></br>
        
                <input type="text" name="type" id="type" value="{{$item->type}}" class="form-control"></br>
                                
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" value="Update">Guardar Cambios</button>
        </div>
    </form>
    </div>
    </div>
</div>