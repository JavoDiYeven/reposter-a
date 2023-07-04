$("#do-login").click(function(){
  var dato = {
    user: $("username").val(),
    contraseña: $("pass").val()
  }
  $.ajax({
    url: '../controllers/auth.controller.php',
    method: 'POST',
    data: dato,
    success: function($respServer){
      console.log($respServer);
    },
    Error: function($respServer){
      console.log($respServer);
    }
  });

});