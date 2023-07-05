$("#do-login").click(function(){
  var dato = {
    user: $("#username").val(),
    contraseña: $("#pass").val()
  }
  $.ajax({
    url: '../controllers/auth.controller.php',
    method: 'POST',
    data: dato,
    success: function($respServer){
      if($respServer == '1')
      {
        window.location.href == 'index.php'
      }else
      {
        document.getElementById('resp-ajax').innerHTML = $respServer;
      }
    },
    error: function($respServer){
      console.log($respServer);
    }
  });

});