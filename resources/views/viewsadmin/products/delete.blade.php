  <!--ELIMINAR TIPO DE PRODUCTO-->
  <div class="modal fade" id="deleteProduct{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">ELIMINAR PRODUCTO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ url('product/' .$item->id) }}" method="post">
                @csrf                  
                <input type="hidden" name="id" id="id" value="{{$item->id}}"/>
         
                <label>Nombre:</label></br>
         
                <input style="" type="text" name="name" id="name" value="{{$item->name}}" class="form-control" disabled></br>
         
                <label>Descripción:</label></br>
         
                <input type="text" name="description" id="description" value="{{$item->description}}" class="form-control" disabled></br>
         
                <label>Precio:</label></br>
         
                <input type="text" name="price" id="price" value="{{$item->price}}" class="form-control" disabled></br>
         
                <label>URL Imagen:</label></br>
         
                <input type="text" name="url_img" id="url_img" value="{{$item->url_img}}" class="form-control" disabled></br>
         
                <form method="POST" action="{{ url('/product' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                    @method('DELETE')
                    @csrf
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button ttype="submit" class="btn btn-danger btn-sm" title="Delete Student"onclick="return confirm('Confirm delete?')">Eliminar Producto</button>
                    </div>
                 
                </form>
         
            </form>
        </div>
        
      </div>
    </div>
  </div>
