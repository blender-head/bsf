$(document).ready(function() {
    
	$(form_element).submit(function(e) {

        e.preventDefault();
        
        var form_data = new FormData(this);

        form_data.append('category_id', $('.selectpicker').val());
        
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: op_url,
            data: form_data,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $('.card-box').waitMe({
                    effect : 'stretch',
                    text : 'Saving...',
                    bg : 'rgba(255,255,255,0.7)',
                    color : '#000',
                    sizeW : '',
                    sizeH : ''
                });
            },
            complete: function(){
                $('.card-box').waitMe('hide');
            },
            success: function(data) {

                if(data.error)
                {
                    showError(data);
                }
                else
                {
                    showSuccess(op_source + ' is successfully saved', redirect_url);
                }

            }
        });
    });

    $('body').on('click', '.set-featured', function(e) {
        e.preventDefault();
        $('#add-image-modal').modal('hide');
        $('.featured-image-wrapper').html('<img width="70%" src="' + $(this).data('image') + '" />');
        $('.media_id').val($(this).data('id'));
        $('.remove-featured').removeClass('hide');
        $('.add-featured').addClass('hide');
    });

    $('body').on('click', '.remove-featured', function(e) {
        e.preventDefault();
        $('.featured-image-wrapper').empty();
        $('.media_id').val('');
        $('.remove-featured').addClass('hide');
        $('.add-featured').removeClass('hide');
    });

});