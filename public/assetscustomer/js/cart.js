(function( $ ){
        $('.addToCartBtn').click(function (e){
            e.preventDefault();

            var id_product = $(this).data('id_product');
            var product_qty = $(this).data('qty-input');
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "/add",
                data: {
                    'id_product': id_product,
                    'product_qty': product_qty,
                },
             
                success: function (response)
                {            
                    if(response.flash_message == 'Check!'){
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                              toast.addEventListener('mouseenter', Swal.stopTimer)
                              toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                          })
                        
                          Toast.fire({
                            icon: 'error',
                            title: '¡Producto ya añadido!'
                          })
                    }

                    else if(response.flash_message == 'AddedCart!'){
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                              toast.addEventListener('mouseenter', Swal.stopTimer)
                              toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                          })
                      
                          Toast.fire({
                            icon: 'success',
                            title: '¡Añadido al carrito!'
                          })
                    }

                }
                
            });
        });
})( jQuery );