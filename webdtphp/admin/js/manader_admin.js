$(document).ready(function () {
    $('#btn_open_add_product').click(function (e) { 
        e.preventDefault();
         $('.form_content').css('display','block');
    });
    $('#btn_close_add_product').click(function (e) { 
        e.preventDefault();
        $('.form_content').css('display','none');
    });

});

/////////////người dùng/////////////

$(document).ready(function () {
    
    $('#btn_open_add_user').click(function (e) { 
        e.preventDefault();
         $('.form_content_user').css('display','block');
         console.log('sdfsfsdf')
    });
    $('#btn_close_add_user').click(function (e) { 
        e.preventDefault();
        $('.form_content_user').css('display','none');
    });
});