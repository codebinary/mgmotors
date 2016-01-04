$(document).on('ready', function() {
    var emailReg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    var dniReg   = /^[0-9]{8}$/;
    var telReg   = /^[0-9]{7,9}$/;

    $('#btnSubmit').on('click', function() {
        $('.error').remove();

        if ( $('#nombres').val() == '' ) {
            $('#nombres').focus().after('<span class="error">Ingrese su nombre</span>');
            return false;
        } else if ( $('#telefono').val() == "" || !telReg.test($('#telefono').val()) ) {
            $('#telefono').focus().after('<span class="error">Ingrese un teléfono válido</span>');
            return false;
        } else if ( $('#revision').val() == '') {
            $('#revision').focus().after('<span class="error">Ingrese un tipo de revisión</span>');
            return false;
        } else if ( $('#email').val() == "" || !emailReg.test($('#email').val()) ) {
            $('#email').focus().after('<span class="error">Ingrese un email válido</span>');
            return false;
        } else if ( $("#modelo option:selected").val() == "" ) {
            $("#modelo").focus().after('<span class="error">Escoje su modelo</span>');
            return false;
        } else if ( $('#dia').val() == '' ) {
            $('#dia').focus().after('<span class="error">Elije un día</span>');
            return false;
        } else if ( $('#hora').val() == '' ) {
            $('#hora').focus().after('<span class="error">Ingresa la hora</span>');
            return false;
        } else if ( $("#departamento option:selected").val() == "" ) {
            $("#departamento").focus().after('<span class="error">Ingrese una departamento</span>');
            return false;
        } else if ( $("#taller option:selected").val() == "" ) {
            $("#taller").focus().after('<span class="error">Ingrese una taller</span>');
            return false;
        } else if ( $('#placa').val() == '' ) {
            $('#placa').focus().after('<span class="error">Ingresa número de placa</span>');
            return false;
        } 
    });

    $("#nombres, #apellidos, #comentarios, #modelo, #revision, #dia, #hora, #placa").keyup(function(){
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