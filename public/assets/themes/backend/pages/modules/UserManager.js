function updateCoords(c)
{
    $('#dataX').val(Math.round(c.x));
    $('#dataY').val(Math.round(c.y));
    $('#dataWidth').val(Math.round(c.w));
    $('#dataHeight').val(Math.round(c.h));
};

$(document).ready(function() {
    
    $(form_element).submit(function(e) {

        e.preventDefault();
        
        var form_data = new FormData(this);

        form_data.append('role', $('.selectpicker').val());
        
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

    $("#image").change(function(){
        
        $(".preview-image-wrapper img").css('height', ''); 
        $(".preview-image-wrapper img").css('width', ''); 
        
        var image_preview = $('#preview-image');

        image_preview.removeAttr('width');

        var JcropAPI = image_preview.data('Jcrop');

        if(JcropAPI != undefined)
        {
            JcropAPI.destroy();
        }

        if (this.files && this.files[0])
        {
            var reader = new FileReader();

            image_preview.attr('src', null);
            
            reader.onload = function (e) {

                //$(".preview-image-wrapper img").css('height', $(".preview-image-wrapper img").height); 

                image_preview.attr('src', e.target.result);

                image_preview.Jcrop({
                    setSelect:   [ 10, 10, 100, 100 ],
                    //aspectRatio: 153 / 175,
                    onSelect: function(coords) {
                        updateCoords(coords);
                    },
                    onChange: function(coords) {
                        updateCoords(coords);
                    },
                    minSize: [0,0],
                    maxSize: [0,0],
                    boxWidth: 500,
                    allowResize: true
                });
            }

            reader.readAsDataURL(this.files[0]);
            file = this.files[0];
            return file;
        }
          
    });
    
});