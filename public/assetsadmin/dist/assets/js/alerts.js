$('.alertDelete').submit(function(e){
    e.preventDefault();
  
    Swal.fire({
    title: '¿Estás seguro de la eliminación?',
    text: "¡Esta acción no se podrá revertir!",
    icon: 'warning',
    showCancelButton: true,
    cancelButtonText: 'Cancelar',
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: '¡Confirmar eliminación!'
    }).then((result) => {
    if (result.isConfirmed) {
        this.submit();
    }
    })
  })
  $('.alertEdit').submit(function(e){
    e.preventDefault();
  
    Swal.fire({
    title: '¿Guardar cambios?',
    text: "¿Está seguro de la actualización?",
    icon: 'info',
    showCancelButton: true,
    cancelButtonText: 'Cancelar',
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: '¡Confirmar actualización!'
    }).then((result) => {
    if (result.isConfirmed) {
        this.submit();
    }
    })
  })