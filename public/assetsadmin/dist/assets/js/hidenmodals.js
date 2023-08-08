$(document).on('ajaxComplete', function () {
    // Abre el modal cuando se complete la carga por AJAX
    $('#editUser').modal('show');
    
    // Clic en el botón "Guardar Cambios" dentro del modal
    $('#save').on('click', function () {
        $('#edit-users-form').submit(); // Envía el formulario
        
        $('#editUser').modal('hide'); // Cierra el modal
    });
});

$(document).on('ajaxComplete', function () {
    
    // Abre el modal cuando se complete la carga por AJAX
    $('#editProduct').modal('show');
    
    // Clic en el botón "Guardar Cambios" dentro del modal
    $('#save').on('click', function () {
        $('#edit-products-form').submit(); // Envía el formulario
        
        $('#editProduct').modal('hide'); // Cierra el modal
    });
});


$(document).on('ajaxComplete', function () {
    // Abre el modal cuando se complete la carga por AJAX
    $('#editTypeProduct').modal('show');
    
    // Clic en el botón "Guardar Cambios" dentro del modal
    $('#save').on('click', function () {
        $('#edit-typeProducts-form').submit(); // Envía el formulario
        
        $('#editTypeProduct').modal('hide'); // Cierra el modal
    });
});