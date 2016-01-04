var BASE_URL = window.location.protocol + "//" + window.location.hostname + "/";
console.log(BASE_URL);


$(document).ready(function() {



  /**

   * Custom validator for letters (uppercase/lowercase)

   */

  jQuery.validator.addMethod("lettersonly", function(value, element) {

    return this.optional(element) || /^[a-zA-ZÁáÉéÍíÓóÚúÑñÝý\s]+$/i.test(value);

  }, "Only alphabetical characters");



  jQuery.validator.addMethod("validNumber", function(value, element, param) {

     /*return this.optional(element) || /^[a-z\s]+$/i.test(value);*/

    var tipoDoc = $('#tipoDoc option:selected').val(),

        regex   = '';

    switch (tipoDoc) {

      case 'dni':

        regex = /^[0-9]+$/;

      break;

      case 'extranjeria':

        regex = /^[0-9]+$/;

      break;

      case 'pasaporte': // 1n

        regex = /^[a-zA-Z0-9]+$/;

      break;

    }

     return this.optional(element) || regex.test(value);

  }, "Verificar su numero de documento.");





  jQuery.validator.addMethod("regex", function(value, element, regexp) {

    var re = new RegExp(regexp);

    return this.optional(element) || re.test(value);

  }, "Verificar su Email.");



  var htmlCboProvincia = '<option value="">- Provincia -</option>',

      htmlCboDistrito = '<option value="">- Distrito -</option>';



  $('#provincia').html(htmlCboProvincia);

  $('#distrito').html(htmlCboDistrito);

  $('#provincia').prop('disabled', true);

  $('#distrito').prop('disabled', true);



  $('#departamento').on('change', function() {
    console.log("Entro");
    $('#departamento option:selected').each(function() {

      var departamento = $(this).val();

      if(departamento != ''){

        $('#provincia').prop('disabled', false);

        $.post(BASE_URL + 'webservice/modulos/webservice/modulos/obtenerProvincia.php', {departamento: departamento}, function(data) {

          if (data === "1") {

            $('#provincia').html(htmlCboProvincia);

          } else {

            $('#provincia').html(data);

          }

        });



      } else {

        $('#provincia').html(htmlCboProvincia).prop('disabled', true);

        $('#distrito').html(htmlCboDistrito).prop('disabled', true);

      }

    });

  });



  $('#provincia').on('change', function() {

    $('#provincia option:selected').each(function() {

      var provincia = $(this).val();
      var departamento = $('#departamento option:selected').val();
      console.log(provincia);
      if(provincia != ''){

        $('#distrito').prop('disabled', false);

        $.post(BASE_URL + 'webservice/modulos/webservice/modulos/obtenerDistritos.php', {provincia: provincia, departamento:departamento}, function(data) {

          if (data === "1") {

            $('#distrito').html(htmlCboDistrito);

          } else {

            $('#distrito').html(data);

          }

        });

      } else {

        $('#distrito').html(htmlCboDistrito).prop('disabled', true);

      }

    });

  });



  $('#tipoDoc').on('change', function() {

    var valTipDoc = $('#tipoDoc option:selected').val();

    if ( valTipDoc === 'dni') {

      $('.tipValorDoc').text('Número de DNI:');

      $('#valorDoc').val('');

    } else if ( valTipDoc === 'pasaporte' ) {

      $('.tipValorDoc').text('Número de Pasaporte:');

      $('#valorDoc').val('');

    } else if ( valTipDoc === 'extranjeria' ) {

      $('.tipValorDoc').text('Nº Carnet de Extranjería:');

      $('#valorDoc').val('');

    } else {

      $('.tipValorDoc').text('...');

      $('#valorDoc').val('');

    }

  });

  $("#btnSubmit").on('click', function(){
    if ($('#diaList').val() == -1) {
        $("#diaList").focus();
            return false;
    }else if($('#mesList').val() == -1){
        $("#mesList").focus();
            return false;
    }else if($('#yearList').val() == -1){
        $("#yearList").focus();
            return false;
      }
  })



  $("#formulario-cotizar").validate({

    rules: {

      tipoDoc: {

        required: true

      },

      valorDoc: {

        required: true,

        validNumber: true,

        minlength: function(element) {

          var sel         = $('#tipoDoc option:selected').val(),

              limitLenght = 0;

          switch (sel) {

            case 'dni':

              limitLenght = 8;

            break;

            case 'extranjeria':

              limitLenght = 9;

            break;

            case 'pasaporte': // 1n

              limitLenght = 9;

            break;

          }

          return limitLenght;

        },

        maxlength: function(element) {

          var sel         = $('#tipoDoc option:selected').val(),

              limitLenght = 0;

          switch (sel) {

            case 'dni':

              limitLenght = 8;

            break;

            case 'extranjeria':

              limitLenght = 9;

            break;

            case 'pasaporte': // 1n

              limitLenght = 9;

            break;

          }

          return limitLenght;

        }

      },

      primerNombre: {

        required: true,

        lettersonly: true

      }/*,

      segundoNombre: {

        required: true,
        lettersonly: true

      }*/,

      apellidoPaterno: {

        required: true,

        lettersonly: true

      },

      apellidoMaterno: {

        required: true,

        lettersonly: true

      },

      dia:{

        required: true,

      },

      mes:{

        required: true,

      },

      anio:{

        required: true,


      },

      direccion:{

        required: true

      },

      departamento:{

        required: true,

        lettersonly: true

      },

      provincia:{

        required: true,

        lettersonly: true

      },

      distrito:{

        required: true,

        lettersonly: true

      },

      telefono:{

        required: true,

        number: true,

        minlength: function(element) {

          var sel         = $('#prefijo option:selected').val(),

              inputFono   = $("input[name=telefono]").val().substr(0,1),

              limitLenght = 0;

          if(inputFono != 9){

            if(sel != 001){

              limitLenght = 6;

            } else {

              limitLenght = 7;

            }

          } else {

            limitLenght = 9;

          }

          return limitLenght;

        },

        maxlength: function(element) {

          var sel         = $('#prefijo option:selected').val(),

              inputFono   = $("input[name=telefono]").val().substr(0,1),

              limitLenght = 0;

          if(inputFono != 9){

            if(sel != 001){

              limitLenght = 6;

            } else {

              limitLenght = 7;

            }

          } else {

            limitLenght = 9;

          }

          return limitLenght;

        }

      },

      email:{

        required: true,

        email: true,

        regex: "[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}"

      },

      modelo:{

        required: true

      },

      solicitud:{

        required: true

      },

      mensaje:{

        required: true

      },

      newsletter:{

        required: true

      }

    },

/*    messages: {

      tipoDoc: {

        required: 'Seleccione un tipo de documento.',

      },

      valorDoc: {

        required: 'Numero de documento, Ingrese su información.',

        minlength: 'Numero de Documento, Complete su numero de documento.',

        maxlength: 'Numero de Documento, Supero el limite de caracteres.'

      },

      primerNombre: {

        required: 'Primer Nombre, Ingrese su información',

        lettersonly: 'Primer Nombre, Solo se aceptan letras.'

      },

      segundoNombre: {

        lettersonly: 'Segundo Nombre, Solo se aceptan letras.'

      },

      apellidoPaterno: {

        required: 'Apellido paterno, Ingrese su información.',

        lettersonly: 'Apellido paterno, Solo se aceptan letras.'

      },

      apellidoMaterno: {

        required: 'Apellido materno, Ingrese su información.',

        lettersonly: 'Apellido materno, Solo se aceptan letras.'

      },

      dia:{

        required: 'Día, Ingrese su información.'

      },

      mes:{

        required: 'Mes, Ingrese su información.'

      },

      anio:{

        required: 'Año, Ingrese su información.'

      },

      direccion:{

        required: 'Dirección, Ingrese su información.'

      },

      departamento:{

        required: 'Departamento, Ingrese su información.'

      },

      provincia:{

        required: 'Provincia, Ingrese su información.'

      },

      distrito:{

        required: 'Distrito, Ingrese su información.'

      },

      telefono:{

        required: 'Telefono, Ingrese su información.',

        number: 'Telefono, Se aceptan solo numeros.',

        minlength: 'Telefono, Falta completar campo.',

        maxlength: $.validator.format("Telefono, No ingresar más de {0} dígitos.")

      },

      email:{

        required: 'Email, Ingrese su información.',

        email: 'Email ingresado no es valido.',

        regex: 'Email ingresado no es valido.'

      },

      modelo:{

        required: 'Modelo, Ingrese su información.'

      },

      solicitud:{

        required: 'Solicitud, Ingrese su información.'

      },

      mensaje:{

        required: 'Comentario, brindenos su comentario.'

      },

      newsletter:{

        required: 'Acepta recibir información?'

      }

    },
*/
    /*errorContainer: $('#errorContainer'),

    errorLabelContainer: $('#errorContainer ul'),

    wrapper: 'li',*/

    submitHandler: function() {

      var datos = $("#formulario-cotizar").serialize();

      console.log(datos);

      $.ajax({

        type: "POST",

        url: BASE_URL + "webservice/modulos/webservice/modulos/insertarCotizacion.php",

        data: datos,

        beforeSend: function() {

          $('#formulario-cotizar').html('');

          $("#preloader").show();

        },

        success: function(data) {

          $("#ajaxloader").hide();

          $('#form-wrapper').html(data);

          window.location.href = BASE_URL +  "contacto-enviado-test.php?cod="+data;

          console.log(data);

        },

        error: function(data) {

          $("#ajaxloader").hide();

          $('#form-wrapper').html('<h1>Oooopps! Parece que hubo una falla</h1><p>' + data + '</p>');

        }

      });

    }

  });



});

