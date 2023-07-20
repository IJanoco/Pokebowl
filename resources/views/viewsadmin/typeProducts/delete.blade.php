 <!--ELIMINAR TIPO DE PRODUCTO-->
 <div class="modal fade" id="deleteTypeProduct{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ELIMINAR TIPO PRODUCTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
           
                                  
        
                <label>Tipo:</label></br>
        
                <input type="text" name="name" id="name" value="{{$item->type}}" class="form-control" disabled></br>
        
                <form class="alertDelete" method="POST" action="{{ url('/typeproduct' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                    @method('DELETE')
                    @csrf
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button ttype="submit" class="btn btn-danger btn-sm" title="Delete Student">Eliminar Tipo Producto</button>
                    </div>
                
                </form>
        
           
        </div>
        
    </div>
    </div>
</div>