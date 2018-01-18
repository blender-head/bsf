function showCategoryError(data)
{
    $('#error-container').removeClass('hide');
    $('.alert').show();
    $('.error-type').html(data.message);
    $('.error-messages').html('');

    if(data.error == 9107)
    {
        for (var x in data.data.errors)
        {
            $('.error-messages').append('<span>' + data.data.errors[x][0] + '</span><br />');
        }
    }
    else
    {
        $('.error-messages').append('<span>' + data.data.errors + '</span><br />');
    }
    
}

$(document).ready(function() {
    
    $('.close_error').on('click',function(){
      $(this).parent().hide();
    });

    $('#create-category').submit(function(e) {

        e.preventDefault();

        var form_data = new FormData(this);
        
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: baseUrl + '/admin/categories/create',
            data: form_data,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $('.modal-body').waitMe({
                    effect : 'stretch',
                    text : 'Processing...',
                    bg : 'rgba(255,255,255,0.7)',
                    color : '#000',
                    sizeW : '',
                    sizeH : ''
                });
            },
            success: function(data) {

                if(data.error)
                {
                    showCategoryError(data);
                }
                else
                {
                    $('#add-category-modal').modal("hide");
                    //$('.category_name').val('');

                    $("#category_id")
                       .append('<option value=' + data.data + ' selected>' + $('.category_name').val() + '</option>')
                       .selectpicker('refresh');
                }

            },
            complete: function() {
                $('.modal-body').waitMe('hide');
            } 
        });
    });

});