// =============================== 檢查input ====================================
function check_input(id,txt) {
    if ($(id).attr('type')=='radio' || $(id).attr('type')=='checkbox') {

    if($(id+':checked').val()==undefined){
    $(id).css('borderColor', 'red');
        return txt;
    }else{
        $(id).css('borderColor', 'rgba(0,0,0,0.1)');
        return "";
    }
    }else{
    if ($(id).val()=='') {
        $(id).css('borderColor', 'red');
        return txt;
    }else{
        $(id).css('borderColor', 'rgba(0,0,0,0.1)');
        return "";
    }
    }
}

//-- 判斷Email --
function check_email(id) {
    if($(id).val().search(/^\w+(?:(?:-\w+)|(?:\.\w+))*\@\w+(?:(?:\.|-)\w+)*\.[A-Za-z]+$/)>-1){
        
        return true;
    }
    else{
        $(id).css('borderColor', 'red');
        return false;
    }
}