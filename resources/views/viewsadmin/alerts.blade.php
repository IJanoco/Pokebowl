@if (session('flash_message')=='deleted!')
<script>
  Swal.fire(
    'Eliminado!',
    'Correctamente',
    'success'
    )
  </script>
@endif
@if (session('flash_message')=='Added!')
<script>
     Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: 'Guardado',
        showConfirmButton: false,
        timer: 1000
      })
  </script>
@endif
@if (session('flash_message')=='Updated!')
<script>
     Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: 'Actualizado',
        showConfirmButton: false,
        timer: 1000
      })
  </script>
@endif