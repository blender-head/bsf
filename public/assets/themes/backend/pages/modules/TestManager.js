$(document).ready(function() {

    $("#selectall").removeProp("checked");
    $("." + data_selector).removeProp("checked");

    var id = [];

	$("#create-deret, #create-prime, #create-fibo").submit(function(e) {

        e.preventDefault();

        var test_type = $(this).data('op');
        
        var form_data = new FormData(this);
        form_data.append('test_type', test_type);
        
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
                    swal({
                        title: data.data,   
                        html: true,
                        type: "success",
                    },
                    function() {   
                        
                    });
                }
            }
        });
    });

    Dropzone.autoDiscover = false;

    $('.dropzone').dropzone ({
        url: op_url,
        paramName: "image",
        init: function() {
            this.on("sending", function(file, xhr, formData){
                formData.append("_token", $('.upload_token').val());
                formData.append("test_type", 'upload');
                //formData.append("origin", origin);
            }),
            this.on("success", function(file, xhr){
                /*
                var new_item = $(xhr.data).filter('div');;

                this.removeFile(file);

                $mason_container.prepend(new_item).imagesLoaded(function(){
                    $mason_container.masonry('prepended', new_item, true );
                }); 
                */
            });
        },
    });

});