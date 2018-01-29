function showError(data)
{
    $('#error-container').removeClass('hide');
    $('.alert').show();
    //$('.error-type').html(data.message);
    $('.error-messages').html('');

    if(data.error_code == 9107)
    {
        for (var x in data.message.errors)
        {
            $('.error-messages').append('<span>' + data.message.errors[x][0] + '</span><br />');
        }
    }
    else
    {
        $('.error-messages').append('<span>' + data.message + '</span><br />');
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
            url: baseUrl + '/senyap/login',
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

                if(data.error_code != 0)
                {
                    showError(data);
                }
                else
                {
                    window.location.replace(baseUrl + '/senyap');
                }

            },
            complete: function() {
                $('.card-box').waitMe('hide');
            } 
        });
    });

});