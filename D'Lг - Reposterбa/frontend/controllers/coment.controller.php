<?
$comentarios = obtener_comentarios();

echo json_encode($comentarios);
 function obtener_comentarios() {
  
  $conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");
   
  $consulta = "SELECT * FROM comentarios";
  $resultado = mysqli_query($conexion, $consulta);
   
  $comentarios = array();
  while ($fila = mysqli_fetch_assoc($resultado)) {
    $comentarios[] = $fila;
  }
   
  mysqli_close($conexion);
   
  return $comentarios;
}
?>