var notif_dialog_timer_hide;
var notif_dialog_timer_timeout;

function notif_dialog_show(msg,classname,autohide,noreload){
    var avail = $('#notif-dialog').length;
    var icon = '';
    if(classname!='error' && classname!='success'){
        var classname = 'info';
    }else if(classname=='error'){
        classname = 'danger';
        icon = 'fa-exclamation-circle';
    }else if(classname=='success'){
        icon = 'fa-check-circle';
    }

    if(avail==0){
        $('body').append('<div id="notif-dialog" class="alert alert-'+classname+'"></div>');
        $('#notif-dialog').append('<div><i class="fa fa-2x '+icon+'"></i>&nbsp;&nbsp;&nbsp;'+msg+'</div>').slideDown('fast');
    }else{
        clearTimeout(notif_dialog_timer_hide);
        clearTimeout(notif_dialog_timer_timeout);
        if(noreload==true){
            $('#notif_dialog_').attr('class','alert alert-'+classname).html(msg);
        }else{
            $('#notif_dialog_').slideUp('fast',function(){
                $(this).attr('class','alert alert-'+classname).slideDown('fast').find('div').html(msg);
            });
        }
    }
    if(autohide!==false){
       notif_dialog_timer_hide = setTimeout('notif_dialog_hide()',5000);
    }else{
       notif_dialog_timer_timeout = setTimeout('notif_dialog_timeout()',60000);
    }
}

function notif_dialog_hide(){
    clearTimeout(notif_dialog_timer_timeout);
    $('#notif-dialog').slideUp('fast',function(){
        $(this).remove();
    });
}

function notif_dialog_timeout(){
    notif_dialog_Show('Request timeout! Please refresh the page and try again...','error',false);
}

$(function(){
    $(document).on('click','#notif-dialog',function(){
        notif_dialog_hide();
    });
});