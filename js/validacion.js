$(document).on('ready', function() {
    var emailReg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    var dniReg   = /^[0-9]{8}$/;
    var telReg   = /^[0-9]{7,9}$/;

    $('#btnSubmit').on('click', function() {
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
        } else if ( $('#dni').val() == "" || !dniReg.test($('#dni').val()) ) {
            $('#dni').focus().after('<span class="error">Ingrese un dni válido</span>');
            return false;
        } else if ( $("#modelo option:selected").val() == "" ) {
            $("#modelo").focus().after('<span class="error">Ingrese su modelo</span>');
            return false;
        } else if ( $("#tienda option:selected").val() == "" ) {
            $("#tienda").focus().after('<span class="error">Ingrese una tienda</span>');
            return false;
        } else if ( $("#modelo").val() == "" ) {
            $("#modelo").focus().after('<span class="error">Escoge un modelo</span>');
            return false;
        }
    });

    $("#nombres, #apellidos, #modelo").keyup(function(){
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
    $("#telefono").keyup(function(){
        if( $(this).val() != "" && telReg.test($(this).val())){
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
});