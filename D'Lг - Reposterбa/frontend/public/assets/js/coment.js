$(document).ready(function() {
  // Obtener los comentarios y mostrarlos en la página
  obtenerComentarios();
   // Agregar un evento al botón de enviar comentario
  $("#submitButton").click(function() {
    // Obtener el nombre y el comentario del usuario
    var nombre = $("#nameInput").val();
    var comentario = $("#commentInput").val();
     // Enviar el comentario a la base de datos
    enviarComentario(nombre, comentario);
  });
});
 function obtenerComentarios() {
  // Hacer una solicitud AJAX para obtener los comentarios
  $.ajax({
    url: "controllers/coment.controller.php",
    type: "GET",
    dataType: "json",
    success: function(data) {
      // Mostrar los comentarios en la página
      for (var i = 0; i < data.length; i++) {
        var comentario = data[i];
        mostrarComentario(comentario.nombre, comentario.comentario);
      }
    }
  });
}
 function enviarComentario(nombre, comentario) {
  // Hacer una solicitud AJAX para enviar el comentario
  $.ajax({
    url: "/controllers/sendComent.controller.php",
    type: "POST",
    data: {
      nombre: nombre,
      comentario: comentario
    },
    success: function() {
      // Mostrar el nuevo comentario en la página
      mostrarComentario(nombre, comentario);
       // Limpiar los campos de nombre y comentario
      $("#nameInput").val("");
      $("#commentInput").val("");
    }
  });
}
 function mostrarComentario(nombre, comentario) {
  // Crear un nuevo elemento de comentario
  var comentarioHTML = "<div class='comentario'>" +
    "<h3>" + nombre + "</h3>" +
    "<p>" + comentario + "</p>" +
    "</div>";
   
  $("#comentarios").append(comentarioHTML);
}
