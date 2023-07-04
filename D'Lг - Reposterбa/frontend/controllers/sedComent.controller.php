<?
$nombre = $_POST["nombre"];
$comentario = $_POST["comentario"];

insertar_comentario($nombre, $comentario);
 function insertar_comentario($nombre, $comentario) {
  
  $conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");
   
  $consulta = "INSERT INTO comentarios (nombre, comentario) VALUES ('$nombre', '$comentario')";
  mysqli_query($conexion, $consulta);
   
  mysqli_close($conexion);
}
?>