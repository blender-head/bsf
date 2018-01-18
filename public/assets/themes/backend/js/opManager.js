$(document).ready(function() {

    $("#selectall").removeProp("checked");
    $("." + data_selector).removeProp("checked");

    var id = [];

	$(form_element).submit(function(e) {

        e.preventDefault();
        
        var form_data = new FormData(this);
        
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

    $('body').on('click', '#selectall', function(e) {

        $('.' + data_selector).prop('checked', this.checked);

        if(this.checked)
        {
            id.splice(0,id.length);

            $("." + data_selector).each(function(index, value) {

                id.push($(this).val());

            });

            console.log(id);
        }
        else
        {
            id.splice(0,id.length);
            console.log(id);
        }

    });
 
    $('body').on('click', '.' + data_selector, function(e) {
        
        var test = "." + data_selector + ":checked";

        if($("." + data_selector).length == $("." + data_selector + ":checked").length) 
        {
            $("#selectall").prop("checked", "checked");
        } 
        else 
        {
            console.log(test);
            $("#selectall").removeProp("checked");
        }

        if(this.checked)
        {
            id.push($(this).val());
            console.log(id);
        }
        else
        {
            id.splice( $.inArray($(this).val(), id), 1 );
            console.log(id);
        }
 
    });

    $('body').on('click', '.delete', function(e) {
        e.preventDefault();
        var id = [$(this).data('id')];
        deleteData(id, token, op_url, redirect_url);
    });

    $('body').on('click', '.delete-all', function(e) {
        e.preventDefault();

        if(id.length > 0)
        {
            deleteData(id, token, op_url, redirect_url);    
        }
        
    }); 

    $('body').on('click', '.set-status', function(e) {
        e.preventDefault();
        var id = [$(this).data('id')];
        var status = $(this).data('status');
        setStatus(id, status, token, publish_url, redirect_url);
    });

    $('body').on('click', '.set-status-all', function(e) {
        e.preventDefault();
        var status = $(this).data('status')

        if(id.length > 0)
        {
            setStatus(id, status, token, publish_url, redirect_url);    
        }
        
    }); 
});