$(document).ready(function(){
  /**************************************/
  $('#taller').prop('disabled', true);

  $('#departamento').on('change', function() {
    var getDepartamento = $('#departamento option:selected').val();
    $.ajax({
      url     : "ajax.php?page=listRSocial",
      type    : "GET",
      dataType: 'json',
      data    : {
        idDepart  : getDepartamento
      },
      beforeSend: function(){
        console.log('Envio de datos');
      },
      success : function(data) {
        $('#taller').prop('disabled', false);
        var cboHtml =  '<option value="">- Elige un Taller Autorizado-</option>';
        for(var x=0; x<data.length; x++){
          cboHtml +=  '<option value="'+ data[x].rsocial_id +'">'+ data[x].rsocial_name +'</option>';
        }
        $('#taller').html(cboHtml);
      },
      error: function(data) {
        console.log('Error :(');
        console.log(data);
      }
    });
  });
});