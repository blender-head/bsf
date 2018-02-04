$(document).ready(function() {
    
    $(form_element).submit(function(e) {

        e.preventDefault();
        
        var form_data = new FormData(this);

        var content = $('.blog_content').summernote('isEmpty') ? '' : $('.blog_content').code();
        form_data.append('content', content);
        
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

                if(data.error_code)
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

	$('body').on('change', '.featured_image', function(e) {
        
        $('#featured-image-preview').removeAttr('src');
        $('#featured-image-preview').removeAttr('width');

        if (this.files && this.files[0])
        {
            file = this.files[0]; 

            preview_image(e, file, '#featured-image-preview');
        }
    });

});