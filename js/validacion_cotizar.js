$(document).on('ready', function() {
    var emailReg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    var dniReg   = /^[0-9]{8}$/;
    var telReg   = /^[0-9]{7,9}$/;

    $('.btnSubmit').on('click', function() {
        $('.error').remove();

        if ( $('#nombres').val() == '' ) {
            $('#nombres').focus().after('<span class="error">Ingrese su nombre</span>');
            return false;
        } else if ( $('#apellidos').val() == "" ) {
            $('#apellidos').focus().after('<span class="error">Ingrese sus apellidos</span>');
            return false;
        } else if ( $('#telefono').val() == "" || !telReg.test($('#telefono').val()) ) {
            $('#telefono').focus().after('<span class="error">Ingrese un teléfono válido</span>');
            return false;
        } else if ( $('#email').val() == "" || !emailReg.test($('#email').val()) ) {
            $('#email').focus().after('<span class="error">Ingrese un email válido</span>');
            return false;
        } else if ( $('#dni').val() == "" || !dniReg.test($('#dni').val()) || $('#dni').val() == 00000000 || $('#dni').val() == 12345678 || $('#dni').val() == 11111111 ||$('#dni').val() == 22222222 || $('#dni').val() == 33333333 || $('#dni').val() == 44444444 || $('#dni').val() == 55555555 || $('#dni').val() == 66666666 || $('#dni').val() == 77777777 || $('#dni').val() == 88888888 || $('#dni').val() == 99999999 || $('#dni').val() == 98765432 ) {
            $('#dni').focus().after('<span class="error">Ingrese un dni válido</span>');
            return false;
        } else if ( $("#modelo option:selected").val() == "" ) {
            $("#modelo").focus().after('<span class="error">Ingrese su modelo</span>');
            return false;
        } else if ( $("#tienda option:selected").val() == "" ) {
            $("#tienda").focus().after('<span class="error">Ingrese una tienda</span>');
            return false;
        } else if ( $("#comentarios").val() == "" ) {
            $("#comentarios").focus().after('<span class="error">Ingrese su comentario</span>');
            return false;
        } else if ( $("#modelo").val() == "" ) {
            $("#modelo").focus().after('<span class="error">Escoge un modelo</span>');
            return false;
        } /*else if( $('#dni').val() == "" || !dniReg.test($('#dni').val()) ){
            $('#dni').focus().after('<span class="error">Ingrese un dni válido</span>');
            return false;
        }*/
    });

    $("#nombres, #apellidos, #comentarios, #modelo").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });
    $("#dni").keyup(function(){
        if( $(this).val() != "" && dniReg.test($(this).val())){
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
    $("#telefono").keyup(function(){
        if( $(this).val() != "" && telReg.test($(this).val())){
            $(".error").fadeOut();
            return false;
        }
    });
});