
(function( $ ){
    $('#editUser').on('shown.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var url = button.attr('data-url')
        var getDataLink = button.data('send')
        var modal = $(this)
        console.log(url)
        $.ajax({
            type: 'GET',
            link: getDataLink,
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
        
        modal.find('#edit-users-form').attr('action', 'string')

    });
 })( jQuery );