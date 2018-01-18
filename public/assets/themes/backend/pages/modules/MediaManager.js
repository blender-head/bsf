var $cropper = $(".cropper");
var $dataX = $("#dataX");
var $dataY = $("#dataY");
var $dataHeight = $("#dataHeight");
var $dataWidth = $("#dataWidth");
var $dataRotate = $("#dataRotate");
var cropper;
var cropped

$(function () {
    
    $('#edit-image-modal').on('shown.bs.modal', function (e) {

        $('.update-image').removeClass('hide');

        var image = $(e.relatedTarget).data('image');
        var media_id = $(e.relatedTarget).data('id');

        $('.media_id').val(media_id);

        $('.cropper').attr('src', image);

        $cropper.cropper({
            data: {
                x: 100,
                y: 100,
                width: 100,
                height: 100
            },
            preview: ".preview",
            zoomable: false,
            done: function(data) {
                $dataX.val(data.x);
                $dataY.val(data.y);
                $dataHeight.val(data.height);
                $dataWidth.val(data.width);
                $dataRotate.val(data.rotate);
            },
            built: function () {
                cropped = $(this).cropper('getCroppedCanvas');
            }
        });
    }).on('hidden.bs.modal', function () {
        $('.cropper').attr('src', '');
        $cropper.cropper('destroy');
    });

    $("#reset").click(function() {
        $cropper.cropper("reset");
    });
});

$(document).ready(function() {

    var $mason_container = $('.portfolioContainer');

    $mason_container.imagesLoaded(function(){ 
        $mason_container.masonry({
            itemSelector: '.media-item'
        }); 
    });

    $('.image-popup').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-fade',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        }
    });

    Dropzone.autoDiscover = false;

    $('.dropzone').dropzone ({
        url: upload_url,
        paramName: "image",
        init: function() {
            this.on("sending", function(file, xhr, formData){
                formData.append("_token", token);
                formData.append("origin", origin);
            }),
            this.on("success", function(file, xhr){
                var new_item = $(xhr.data).filter('div');;

                this.removeFile(file);

                $mason_container.prepend(new_item).imagesLoaded(function(){
                    $mason_container.masonry('prepended', new_item, true );
                }); 
            });
        },
    });

    $('#imageEdit').submit(function(e) {

        e.preventDefault();
        
        var form_data = new FormData(this);
        
        form_data.append('_token', token);
        form_data.append('id', $('.media_id').val());
        form_data.append('origin', origin);

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: baseUrl + '/admin/media/edit',
            data: form_data,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $('.card-box.image-wrapper').waitMe({
                    effect : 'stretch',
                    text : 'Saving...',
                    bg : 'rgba(255,255,255,0.7)',
                    color : '#000',
                    sizeW : '',
                    sizeH : ''
                });
            },
            complete: function(){
                $('.card-box.image-wrapper').waitMe('hide');
            },
            success: function(data) {

                if(data.error)
                {
                    showError(data);
                }
                else
                {
                    $(".cropper").cropper('replace', data.data);

                    //$('.image-wrapper').html('<img src="' + data.data + '">');
                    
                    //$('.cropper').attr('src', data.data);

                    $('.image-item-' + $('.media_id').val()).attr('src', data.data);

                    $('.edit-' + $('.media_id').val()).data('image', data.data);

                    $('.featured-' + $('.media_id').val()).data('image', data.data);

                    $mason_container.masonry('destroy');

                    $mason_container.imagesLoaded(function(){ 
                        $mason_container.masonry({
                            itemSelector: '.media-item'
                        }); 
                    });
                }

            }
        });
    });

    $('body').on('click', '.delete', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        deleteImage(id, token, delete_image_url, $mason_container);
    });

});