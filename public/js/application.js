$(function(){
    $('form.validation-engine').validationEngine('attach',{
        autoHidePrompt : true,
        autoHideDelay : 3000,
        validationEventTrigger : 'submit',
        promptPosition: 'topLeft',
        scroll: false
    });
    
    $(document).on('submit','form.ajax-form',function(e){
        e.preventDefault();
        var $$ = $(this);
        if($$.hasClass('validation-engine')){
            if(!$$.validationEngine('validate')){
                return false;
            }
        }
        var btn;
        btn = $$.find('button[type=submit]:focus,input[type=submit]:focus');
        if(btn.length==0){
            btn = $$.find('button[type=submit]:first,input[type=submit]:first');
        }
        var method = $$.attr('method');
        var action = $$.attr('action');
        var callfront = $$.attr('data-callfront');
        var callback_pre = $$.attr('data-callback-pre');
        var callback = $$.attr('data-callback');
        if(callfront && callfront.length>0){
            if(!window[callfront]()){
                return false;
            }
        }
        button_toggle_loading(btn,true);
        $.ajax({
            type: method.toLowerCase()=='post'?'POST':'GET',
            url: action,
            data: $$.serialize(),
            async: true,
            cache: false,
            timeout: 20000,
            success: function(j){
                if(j){
                    if(typeof callback_pre!=='undefined' && callback_pre.length>0){
                        window[callback_pre](j);
                    }
                    if(typeof j.status=='undefined'){
                        notif_dialog_show('Invalid response received!','error');
                    }
                    if(j.status===true){
                        if(typeof j.msg!=='undefined'){
                            notif_dialog_show(j.msg,'success');
                        }else{
                            notif_dialog_hide();
                        }
                        if(typeof j.redirect!=='undefined'){
                            document.location.href = j.redirect;
                        }
                        if(typeof callback!=='undefined' && callback.length>0){
                            window[callback](j);
                        }
                    }else if(typeof j.msg!=='undefined'){
                        notif_dialog_show(j.msg,'error');
                    }else{
                        notif_dialog_show('Request failed. Please try again','error');
                    }
                }else{
                    notif_dialog_show('Unknown error occurred. Please try again!','error');
                }
            },
            error: function(status){
                notif_dialog_show('Error: '+status.status+' '+status.statusText,'error');
            },
            complete: function(){
                button_toggle_loading(btn,false);
            }
        });
    });

    $(document).on('click','a.btn-delete',function(e){
        e.preventDefault();
        var r = confirm('Are you sure you want to delete this?');
        if(!r){
            return false;
        }
        var $$ = $(this);
        var id = $$.data('id');
        var type = $$.data('type');
        button_toggle_loading($$,true);
        $.ajax({
            type: 'POST',
            url: GLBL_URL+'/'+type+'/manage/delete',
            data: {id:id},
            async: true,
            cache: false,
            timeout: 20000,
            success: function(j){
                if(j){
                    if(typeof j.status=='undefined'){
                        notif_dialog_show('Invalid response received!','error');
                    }
                    if(j.status===true){
                        if(typeof j.msg!=='undefined'){
                            notif_dialog_show(j.msg,'success');
                            $$.parent().parent().fadeOut();
                        }else{
                            notif_dialog_hide();
                        }
                        if(typeof j.redirect!=='undefined'){
                            document.location.href = j.redirect;
                        }
                        if(typeof callback!=='undefined' && callback.length>0){
                            window[callback](j);
                        }
                    }else if(typeof j.msg!=='undefined'){
                        notif_dialog_show(j.msg,'error');
                    }else{
                        notif_dialog_show('Request failed. Please try again','error');
                    }
                }else{
                    notif_dialog_show('Unknown error occurred. Please try again!','error');
                }
            },
            error: function(status){
                notif_dialog_show('Error: '+status.status+' '+status.statusText,'error');
            },
            complete: function(){
                button_toggle_loading($$,false);
            }
        });
    });
    
    $(document).on('keydown','.numbers-only',function(e){
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode,[46,8,9,27,13,110,190])!==-1 ||
             // Allow: Ctrl+A
            (e.keyCode==65 && e.ctrlKey===true) || 
             // Allow: home, end, left, right
            (e.keyCode>=35 && e.keyCode<=39)){
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode<48 || e.keyCode>57)) && (e.keyCode<96 || e.keyCode>105)){
            e.preventDefault();
        }
    });
    
    $(document).on('keyup','.alpha-numeric-ucase',function(e){
        var $$ = $(this);
        var val = $$.val();
        $$.val(val.toUpperCase().replace(/([^0-9A-Z])/g,''));
    });
});

function button_toggle_loading(elem,type){
    if(type===true){
        elem.addClass('disabled');
        elem.attr('data-text',elem.html());
        elem.css('width',elem.outerWidth()+'px').html('<i class="fa fa-repeat animate-rotate"></i>');
    }else{
        elem.removeClass('disabled');
        elem.html(elem.attr('data-text')).removeAttr('data-text');
        elem.css('width',false);
    }
    elem.blur();
}

function ajax_request(d){
    var button = null;
    var method = 'get';
    var url = '';
    var data = {};
    var callback = null;
    if(typeof d.button!='undefined'){
        button = d.button;
    }
    if(typeof d.method!='undefined' && (d.method).toLowerCase()=='post'){
        method = d.method;
    }
    if(typeof d.url!='undefined'){
        url = d.url;
    }
    if(typeof d.data!='undefined'){
        data = d.data;
    }
    if(typeof d.callback!='undefined'){
        callback = d.callback;
    }
    if(button!==null) {
        button_toggle_loading(button, true);
    }
    $.ajax({
        type: method,
        url: url,
        data: data,
        async: true,
        cache: false,
        timeout: 60000,
        success: function(j){
            if(j){
                if(typeof j.status!='undefined' && j.status===true){
                    if(typeof j.msg!='undefined'){
                        notif_dialog_show(j.msg,'success');
                    }else{
                        notif_dialog_hide();
                    }
                    if(typeof j.redirect!='undefined'){
                        document.location.href = j.redirect;
                    }
                }else{
                    notif_dialog_show(j.msg,'error');
                }
                if(callback!==null){
                    window[callback](j);
                }
            }else{
                notif_dialog_show('Unknown error occurred. Please try again!','error');
            }
        },
        error: function(status){
            notif_dialog_show('Error: '+status.status+' '+status.statusText,'error');
        },
        complete: function(){
            if(button!==null) {
                button_toggle_loading(button, false);
            }
        }
    });
}
