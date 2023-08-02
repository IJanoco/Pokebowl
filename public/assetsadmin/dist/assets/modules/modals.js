
(function( $ ){
    $('#editUser').on('shown.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var url = button.data('url')
        var getDataLink = button.data('send')
        var modal = $(this)
        
        $.ajax({
            type: 'GET',
            url: getDataLink,
            dataType: 'JSON',
            success: function (data)
            {
                var name = data.name
                var last_name = data.last_name
                var email = data.email
                var address = data.address
                var postal_code = data.postal_code
                var phone = data.phone
                var dni = data.dni
                var id_type = data.id_type

                modal.find('.name').val(name)
                modal.find('.last_name').val(last_name)
                modal.find('.email').val(email)
                modal.find('.address').val(address)
                modal.find('.postal_code').val(postal_code)
                modal.find('.phone').val(phone)
                modal.find('.dni').val(dni)
                modal.find('.id_type').val(id_type)

            },
            error: function(response){

            }
        })
        
        modal.find('#edit-users-form').attr('action', url)

    });

    $('#editTypeProduct').on('shown.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var url = button.data('url')
        var getDataLink = button.data('send')
        var modal = $(this)
        
        $.ajax({
            type: 'GET',
            url: getDataLink,
            dataType: 'JSON',
            success: function (data)
            {
                var type = data.type
              

                modal.find('.type').val(type)
                

            },
            error: function(response){

            }
        })
        
        modal.find('#edit-typeProducts-form').attr('action', url)

    });
    $('#editProduct').on('shown.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var url = button.data('url')
        var getDataLink = button.data('send')
        var modal = $(this)
        
        $.ajax({
            type: 'GET',
            url: getDataLink,
            dataType: 'JSON',
            success: function (data)
            {
                var name = data.name
                var description = data.description
                var price = data.price
                var id_type = data.id_type
                var url_img = data.url_img

                modal.find('.name').val(name)
                modal.find('.description').val(description)
                modal.find('.price').val(price)
                modal.find('.id_type').val(id_type)
                modal.find('#previewImage').attr('src', url_img)

            },
            error: function(response){

            }
        })
        
        modal.find('#edit-products-form').attr('action', url)

    });

    
 })( jQuery );