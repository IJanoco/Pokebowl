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
                            timer: 1500,
                            
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
                            timer: 1500,
                            
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

        $('.delete-cart-product').click(function(e) {
          e.preventDefault();
      
          var id_product = $(this).data('id_product');
          
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          
          $.ajax({
              type: 'POST',
              url: "/remove",
              data: {
                  'id_product': id_product,
              },
              success: function(response) {
                  if (response.flash_message == 'DeleteProduct!') {
                      const productId = id_product;
                      //Elimina el div del producto eliminado
                      $('[data-product-id="' + productId + '"]').remove();
                      //Elimina del detalle el producto eliminado
                      $('.tr[data-product-id="' + productId + '"]').remove();
                      //Actualiza el total de la suma de productos
                      $('#total td:last-child').html('S/' + response.newTotal);
                      const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 1500,
                          didOpen: (toast) => {
                              toast.addEventListener('mouseenter', Swal.stopTimer)
                              toast.addEventListener('mouseleave', Swal.resumeTimer)
                          }
                      })
      
                      Toast.fire({
                          icon: 'success',
                          title: '¡Producto eliminado de su carro!'
                      });
                  }
              }
          });
      });
      
      $('.store-order').click(function(e) {
        e.preventDefault();
        // Disable the button to prevent multiple clicks
        $(this).prop('disabled', true);
        var delivery_type = $('#delivery_type').val();
        var prodQ = [];
    
        $('.quantity-input').each(function() {
            var product_id = $(this).data('product-id');
            var input_qty = $(this).val();
    
            prodQ.push({
                'product_id': product_id,
                'input_qty': input_qty
            });
        });
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "/ordercreate",
            data: {
                'delivery_type': delivery_type,
                'prodQ': prodQ,
            },
            success: function(response) {
                // Actualizar la página o redirigir a otra ruta
                if (response.status === 'Created!') {     
                    
                    $('.container-fluid.col-5').empty();
                    $('.trdelete').empty();
                    $('#total').text('S/ 0.00');
                    var reportUrl = response.report_url;
                    // Abrir el enlace en una nueva pestaña o ventana
                    var newTab = window.open(reportUrl, '_blank');
                    
                    // Verificar si se pudo abrir la pestaña/ventana
                    if (newTab) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer);
                                toast.addEventListener('mouseleave', Swal.resumeTimer);
                            }
                        });
            
                        Toast.fire({
                            icon: 'success',
                            title: '¡Pedido realizado con éxito!'
                        });
                    }
                }
                else if (response.status === 'Denied!'){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
                        }
                    });
        
                    Toast.fire({
                        icon: 'error',
                        title: '¡Necesitas Añadir Productos a tu Carrito!'
                    });
                }
                
        },
           
        });
    });
    
     
      
    $('.increment-btn').click(function(e) {
        e.preventDefault();
        
        var productId = $(this).data('product-id');
        var input = $('.qty-input.input_qty_' + productId);
        var value = parseInt(input.val(), 10);
        
        if (value < 10) {
            value++;
            input.val(value);
            
            // Llamar a la función de actualización con Ajax
            updateSubtotal(productId, value);
       
        }
    });
        
    $('.decrement-btn').click(function(e) {
        e.preventDefault();
        
        var productId = $(this).data('product-id');
        var input = $('.qty-input.input_qty_' + productId);
        var value = parseInt(input.val(), 10);
        
        if (value > 1) {
            value--;
            input.val(value);
            
            // Llamar a la función de actualización con Ajax
            updateSubtotal(productId, value);
           
        }
    });
    
    function updateSubtotal(productId, value) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "/update-subtotal",
            data: {
                'product_id': productId,
                'value': value,
            },
            success: function(response) {
                    
                // Actualizar el valor del subtotal en la página
                var subtotal = parseFloat(response.subtotal).toFixed(2);
                $('.subtotal[data-product-id="' + productId + '"]').text('S/' + subtotal);
                
                var total = parseFloat(response.total).toFixed(2);
                $('#total').text('S/' + total);
                
            },
            error: function(response){
                console.log(response)
            }
        });
    }

    
    
   
    
})( jQuery );