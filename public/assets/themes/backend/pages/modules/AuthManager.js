function showError(data)
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
    
    $('.close').on('click',function(){
      $(this).parent().hide();
    });

    $('#login-form').submit(function(e) {

        e.preventDefault();

        var form_data = new FormData(this);
        
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: baseUrl + '/bsf/login',
            data: form_data,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $('.card-box').waitMe({
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
                    showError(data);
                }
                else
                {
                    window.location.replace(baseUrl + '/admin/dashboard');
                }

            },
            complete: function() {
                $('.card-box').waitMe('hide');
            } 
        });
    });

});