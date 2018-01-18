$(document).ready(function() {
    
	$(form_element).submit(function(e) {

        e.preventDefault();
        
        var form_data = new FormData(this);

        form_data.append('permissions', $('.selectpicker').val());
        
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

});