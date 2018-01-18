$(document).ready(function() {

    $("#selectall").removeProp("checked");
    $(".room").removeProp("checked");

    var id = [];

	$('#add-room, #edit-room').submit(function(e) {

        e.preventDefault();
        
        var op = $(this).data('op');

        var form_data = new FormData(this);
        
        switch(op)
        {
        	case 'add':
        		var url = baseUrl + '/backend/room/add';
        		var redirect_url = baseUrl + '/backend/room';
                var rw = $('#logo-preview').width();
        		break;

        	case 'edit':
        		var url = baseUrl + '/backend/room/edit';
        		var redirect_url = baseUrl + '/backend/room/edit?id=' + $('.room_id').val();
                var rw = $('#preview-normal').width();
        		break;
        }
        
        //form_data.append('rw', rw);

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: url,
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
                    showInlineError(data);
                    showError(data);
                }
                else
                {
                    showSuccess(' is successfully saved', redirect_url);
                }

            }
        });
    });
    
    $("#room_image").change(function(){
        
        var op = $(this).data('op');

        switch(op)
        {
            case 'add':
                var logo_preview = $('#logo-preview');
                break;

            case 'edit':
                var logo_preview = $('#preview-normal');
                break;
        }

        logo_preview.removeAttr('style');
        
        var JcropAPI = logo_preview.data('Jcrop');

        if(JcropAPI != undefined)
        {
            JcropAPI.destroy();
        }
        
        file = readURL(this, logo_preview, 'avatar', 0, 0, 960, 465, false);
          
    });

    $('body').on('click', '#selectall', function(e) {

        $('.room').prop('checked', this.checked);

        if(this.checked)
        {
            room_id.splice(0,room_id.length);

            $(".room").each(function(index, value) {

                room_id.push($(this).val());

            });

            console.log(room_id);
        }
        else
        {
            room_id.splice(0,room_id.length);
            console.log(room_id);
        }

    });
 
    $('body').on('click', '.room', function(e) {
 
        if($(".room").length == $(".room:checked").length) 
        {
            $("#selectall").prop("checked", "checked");
        } 
        else 
        {
            $("#selectall").removeProp("checked");
        }

        if(this.checked)
        {
            room_id.push($(this).val());
            console.log(room_id);
        }
        else
        {
            room_id.splice( $.inArray($(this).val(), room_id), 1 );
            console.log(room_id);
        }
 
    });

    $('body').on('click', '.delete', function() {
        var id = [$(this).data('id')];

        var url = baseUrl + '/backend/room/delete';
        var redirect_url = baseUrl + '/backend/room';
        
        deleteData(id, url, redirect_url);
    });

    $('body').on('click', '.delete-all', function(e) {
        e.preventDefault();

        if(room_id.length > 0)
        {
            var id = room_id;
            var url = baseUrl + '/backend/room/delete';
            var redirect_url = baseUrl + '/backend/room';
            deleteData(id, url, redirect_url);    
        }
        
    }); 
});