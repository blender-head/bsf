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
        },
        createdRow: function ( row, data, index ) {
            $(row).addClass('data-' + data[7]);
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

function resetFormElement(e) 
{
      e.wrap('<form>').closest('form').get(0).reset();
      e.unwrap();
}

function deleteData(id, token, url, datatable_el)
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
                        swal({
                            title: 'Data is sucessfully deleted',   
                            html: true,
                            type: "success",
                        },
                        function() {   

                            //showSuccess('Data is successfully deleted', redirect_url);

                            for(var i=0;i<id.length;i++)
                            {
                                $('.data-' + id[i]).remove();   
                            }

                            $("#selectall").prop("checked",false);
                            
                            var table = $(datatable_el).DataTable();
                            table.draw(false);

                        });
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

function setStatus(id, status, token, url, redirect_url)
{
    var status_text = 'unpublish';

    if(status == '1')
    {
        status_text = 'publish';
    }

    swal({   
        title: "Are you sure?",   
        text: "You will " + status_text + " this data!",   
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
                    if(data.error_code)
                    {
                        showError(data);
                    }
                    else
                    {
                        swal({
                            title: 'Status is sucessfully updated',   
                            html: true,
                            type: "success",
                        },
                        function() {   
                            for(var i=0;i<id.length;i++)
                            {
                                if(status == '0')
                                {
                                    $('.status-text-' + id[i]).removeClass('label-success');
                                    $('.status-text-' + id[i]).addClass('label-info');
                                    $('.status-text-' + id[i]).html('Unpublished');
                                    $('.status-button-' + id[i]).data('status', '1');
                                    $('.status-button-' + id[i]).prop('title', 'Publish').tooltip('fixTitle').tooltip('show');
                                    $('.status-button-icon-' + id[i]).removeClass('md-close');
                                    $('.status-button-icon-' + id[i]).addClass('md-done');
                                }
                                else
                                {
                                    $('.status-text-' + id[i]).removeClass('label-info');
                                    $('.status-text-' + id[i]).addClass('label-success');
                                    $('.status-text-' + id[i]).html('Published');
                                    $('.status-button-' + id[i]).data('status', '0');
                                    $('.status-button-' + id[i]).prop('title', 'Unpublish').tooltip('fixTitle').tooltip('show');
                                    $('.status-button-icon-' + id[i]).removeClass('md-done');
                                    $('.status-button-icon-' + id[i]).addClass('md-close');
                                }   
                            }
                        });
                    }
                },
                complete: function() {
                    $('.card-box').waitMe('hide');
                } 
            });
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

                    if (width >= 300) {
                        width_attr = '40%';
                        $(img_element).attr('width', width_attr);
                    }

                    $(img_element).attr('src', event.target.result);

                    return true;
                };
            }

            reader.readAsDataURL(file);
        }
    };
  
    fileReader.readAsArrayBuffer(file);
}

function initSummernote(el)
{
    $(el).summernote({
        height: 350,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: false                 // set focus to editable area after initializing summernote
    });
}

function previewFeaturedImage(event, el)
{
    $('#featured-image-preview').removeAttr('src');
    $('#featured-image-preview').removeAttr('width');

    if (el.files && el.files[0])
    {
        file = el.files[0]; 

        preview_image(event, file, '#featured-image-preview');
    }
}

function getSummerNoteContent(el)
{
    var content = $(el).summernote('isEmpty') ? '' : $(el).code();
    return content;
}