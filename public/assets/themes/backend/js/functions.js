var confirm = '';

function ajax_data_table(el, el_loader, url)
{
    $(el).DataTable({
        serverSide: true,
        bInfo: false,
        searching: false,
        bSort : false,
        ajax: {
            url: url,
            type:'POST',
            data: {
                '_token': token
            },
            beforeSend: function() {

                $(el_loader).waitMe({
                    effect : 'stretch',
                    text : 'Loading data...',
                    bg : 'rgba(255,255,255,0.7)',
                    color : '#000',
                    sizeW : '',
                    sizeH : ''
                });
            },
            complete: function(){
                $(el_loader).waitMe('hide');
            }
        }
    });
}

function showError(data)
{
    var msg = '';

    if (data.error_code == '9107') 
    {
        //msg = '<div><strong>' + data.message + '</strong></div>';

        for (var x in data.message.errors) {
            msg += '<div><strong><em>- ' + data.message.errors[x][0] + '</em></strong></div>';
        }

        swal({
            title: 'Validation Error',   
            text: msg,   
            html: true,
            type: "error",
        });
    }
    else if (data.error_code == '1000') 
    {
        msg += '<div><strong><em>' + data.message.errors + '</em></strong></div>';

        swal({
            title: 'System Error',   
            text: msg,   
            html: true,
            type: "error",
        });
    }
    else 
    {
        swal({
            title: 'Error',   
            html: true,
            type: "error",
        });
    }
}

function showSuccess(msg, url)
{
    swal({
        title: msg,   
        html: true,
        type: "success",
    },
    function() {   
        window.location.replace(url);
    });
}

function showConfirm(msg, get_confirm)
{
    bootbox.confirm(msg, function(result) {
        get_confirm(result);
        /*if(result)
        {
            $.ajax({
                type: 'POST',
                dataType: 'json',
                data: { 
                    'id' : id,
                },
                url: url,
                beforeSend: function() {
                    $('.panel').waitMe({
                        effect : 'stretch',
                        text : 'Updating...',
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
                        showSuccess('Image is successfully updated', url);
                    }
                },
                complete: function() {
                    $('.panel').waitMe('hide');
                } 
            });
           
        }*/
    });
}

function showOpTooltip()
{
    $(".edit").tooltip({
        title : 'Edit'
    });

    $(".delete").tooltip({
        title : 'Delete'
    });
}

function showEditPage(url)
{
    window.location.replace(url);
}

function readURL(input,el)
{
    if (input.files && input.files[0])
    {
        var reader = new FileReader();

        el.attr('src', null);
        
        reader.onload = function (e) {

            el.attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
        file = input.files[0];
        return file;
    }
}

function updateCoords(c,type)
{
    switch(type)
    {
        case 'avatar':
            $('#x').val(c.x);
            $('#y').val(c.y);
            $('#w').val(c.w);
            $('#h').val(c.h);
            break;

        case 'logo':
            $('#x_logo').val(c.x);
            $('#y_logo').val(c.y);
            $('#w_logo').val(c.w);
            $('#h_logo').val(c.h);
            break;
    }
    
};

function resetFormElement(e) 
{
      e.wrap('<form>').closest('form').get(0).reset();
      e.unwrap();
}

function deleteData(id, token, url, redirect_url)
{
    swal({   
        title: "Are you sure?",   
        text: "You will not be able to recover this data!",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Yes",   
        cancelButtonText: "Cancel",   
        closeOnConfirm: true,   
        closeOnCancel: true 
    }, 
    function(isConfirm) {   
        if(isConfirm) 
        {     
            $.ajax({
                type: 'POST',
                dataType: 'json',
                data: { 
                    'id' : id,
                    '_token': token
                },
                url: url,
                beforeSend: function() {
                    $('.card-box').waitMe({
                        effect : 'stretch',
                        text : 'Deleting...',
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
                        showSuccess('Data is successfully deleted', redirect_url);
                    }
                },
                complete: function() {
                    $('.card-box').waitMe('hide');
                } 
            });
        } 
    });
}

function cancelOp(redirect_url)
{
    window.location.replace(redirect_url);
}

function deleteImage(id, token, url, masonry_object)
{
    swal({   
        title: "Are you sure?",   
        text: "You will not be able to recover this file!",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Yes",   
        cancelButtonText: "Cancel",   
        closeOnConfirm: true,   
        closeOnCancel: true 
    }, 
    function(isConfirm) {   
        if(isConfirm) 
        {     
            $.ajax({
                type: 'POST',
                dataType: 'json',
                data: { 
                    'id' : id,
                    '_token': token
                },
                url: url,
                beforeSend: function() {
                    $('.gal-detail-' + id).waitMe({
                        effect : 'stretch',
                        text : 'Deleting...',
                        bg : 'rgba(255,255,255,0.7)',
                        color : '#000',
                        sizeW : '',
                        sizeH : ''
                    });
                },
                complete: function(){
                    $('.gal-detail-' + id).waitMe('hide');
                },
                success: function(data) {
                    if(data.error)
                    {
                        showError(data);
                    }
                    else
                    {
                        var removed = $('.media-item.item-' + id);

                        $('.remove-featured').addClass('hide');
                        $('.add-featured').removeClass('hide');

                        masonry_object.imagesLoaded(function(){ 
                            masonry_object.masonry('remove', removed).masonry('layout');
                            masonry_object.masonry('remove', removed).masonry('reloadItems');
                        });

                        swal({
                            title: 'Image is successfully deleted',   
                            html: true,
                            type: "success",
                        });
                    }
                }
            });
        } 
    });
}

function setStatus(id, status, token, url, redirect_url)
{
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: { 
            'id' : id,
            'status': status,
            '_token': token
        },
        url: url,
        beforeSend: function() {
            $('.card-box').waitMe({
                effect : 'stretch',
                text : 'Updating...',
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
                showSuccess('Status is successfully updated', redirect_url);
            }
        },
        complete: function() {
            $('.card-box').waitMe('hide');
        } 
    });
}

function preview_image(event, file, img_element)
{
    var fileReader = new FileReader();
    
    var result = false;

    fileReader.onloadend = function(event) {
        var arr = (new Uint8Array(event.target.result)).subarray(0, 4);
    
        var header = "";
    
        for (var i = 0; i < arr.length; i++) {
            header += arr[i].toString(16);
        }

        switch (header) {
            case "89504e47":
            case "ffd8ffe0":
            case "ffd8ffe1":
            case "ffd8ffe2":
            case "ffd8ffe3":
            case "ffd8ffe8":
                result = true;
                break;
        }

        if(result)
        {
            var reader = new FileReader();

            reader.onload = function (event) {

                var width = 0;

                var width_attr = '100%';

                var image = new Image();
 
                //Set the Base64 string return from FileReader as source.
                image.src = event.target.result;
                       
                //Validate the File Height and Width.
                image.onload = function () {
                    
                    width = this.width;

                    if (width > 300) {
                        width_attr = '40%';
                        $(img_element).attr('width', width_attr);
                    }
                    
                    console.log(width_attr);

                    $(img_element).attr('src', event.target.result);

                    return true;
                };
            }

            reader.readAsDataURL(file);
        }
    };
  
    fileReader.readAsArrayBuffer(file);
}