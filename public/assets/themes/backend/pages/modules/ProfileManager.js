$(document).ready(function() {

    $('#edit-profile, #edit-password').submit(function(e) {

        e.preventDefault();
        
        var op = $(this).data('op');

        var form_data = new FormData(this);
        
        switch(op)
        {
            case 'edit-profile':
                var url = baseUrl + '/admin/profile/update_profile';
                var redirect_url = baseUrl + '/admin/profile';
                var info = 'Profile';
                var wait_me_display = '.page-content-wrap';
                break;

            case 'edit-password':
                var url = baseUrl + '/admin/profile/update_password';
                var redirect_url = baseUrl + '/admin/profile';
                var info = 'Password';
                var wait_me_display = '';
                break;
        }
        
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: url,
            data: form_data,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $(wait_me_display).waitMe({
                    effect : 'stretch',
                    text : 'Saving...',
                    bg : 'rgba(255,255,255,0.7)',
                    color : '#000',
                    sizeW : '',
                    sizeH : ''
                });
            },
            complete: function(){
                $(wait_me_display).waitMe('hide');
            },
            success: function(data) {

                if(data.error)
                {
                    showError(data);
                }
                else
                {
                    showSuccess(info + ' is successfully saved', redirect_url);
                }

            }
        });
    });
    
    /*    
    $('#profile-preview').cropper({
      built: function () {
        $(this).cropper('destroy');
      }
    });
    */

    $("#cp_photo").on("change",function(){
        file = readURL(this, $('#profile-preview'));
    });

    

});