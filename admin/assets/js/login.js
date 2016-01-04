$(function () {

  var l = window.location;
  var base_url = l.protocol + "//" + l.host + "/" + l.pathname.split('/')[1];

  $('.frmLog').unbind('click').bind('click', function(e){
    var user = $('input[name=username]').val(),
        clve = $('input[name=clave]').val(),
        login = base_url+'/users_controller/login_user';
    /***************************************/
    /***************************************/
    $.ajaxSetup({cache: false});
    $.ajax({
      type: "GET",
      url: login,
      // dataType: prev.options.gridDataType,
      data: { user : user,
              clve : clve },
      success: function(html){
        if(html == 'true'){
          alertify.success("Login Autorizado¡");
          setTimeout(function(){
            window.location.href = base_url+'/users_controller';
          }, 2000);
        } else if(html == 'false') {
          alertify.error("Login erróneo");
        }
      },
      error: function(xhr, status, error){
        // console.log("Error! " + xhr.status);
      },
      complete: function(){
        // 
      }
    });

    e.preventDefault();
  });


});