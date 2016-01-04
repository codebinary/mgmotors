$(document).on('ready', function() {
    var emailReg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

    $('#btnSubmit').on('click', function() {
        $('.error').remove();
        if ( $('#nombre').val() == "" ) {
            $('#nombre').focus().after('<span class="error">Ingrese su nombre completo</span>');
            return false;
        } else if ( $('#email').val() == "" || !emailReg.test($('#email').val()) ) {
            $('#email').focus().after('<span class="error">Ingrese un email válido</span>');
            return false;
        }else if ( $('#url').val() == "" ) {
            $('#url').focus().after('<span class="error">Ingrese una URL</span>');
            return false;
        }

    });

    $("#nombre").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });

    $("#email").keyup(function(){
        if( $(this).val() != "" && emailReg.test($(this).val())){
            $(".error").fadeOut();
            return false;
        }
    });
    $("#url").keyup(function(){
        if( $(this).val() != "" && emailReg.test($(this).val())){
            $(".error").fadeOut();
            return false;
        }
    });
});