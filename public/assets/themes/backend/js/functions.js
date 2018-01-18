var confirm = '';

function showError(data)
{
    var msg = '';

    if (data.error == '9107') 
    {
        //msg = '<div><strong>' + data.message + '</strong></div>';

        for (var x in data.data.errors) {
            msg += '<div><strong><em>- ' + data.data.errors[x][0] + '</em></strong></div>';
        }

        swal({
            title: data.message,   
            text: msg,   
            html: true,
            type: "error",
        });
    }
    else if (data.error == '1000') 
    {
        //msg = '<div><p><strong>' + data.message + '</strong></p></div>';
        msg += '<div><strong><em>' + data.data.errors + '</em></strong></div>';

        swal({
            title: data.message,   
            text: msg,   
            html: true,
            type: "error",
        });
    }
    else 
    {
        swal({
            title: data.message,   
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