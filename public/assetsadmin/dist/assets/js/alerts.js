$('.alertDelete').submit(function(e){
    e.preventDefault();
  
    Swal.fire({
    title: '¿Estás seguro de la eliminación?',
    text: "¡Esto no se podrá revertir!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: '¡Sí, eliminarlo!'
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
    text: "¿Está seguro de actualizar?",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: '¡Sí, actualizar!'
    }).then((result) => {
    if (result.isConfirmed) {
        this.submit();
    }
    })
  })