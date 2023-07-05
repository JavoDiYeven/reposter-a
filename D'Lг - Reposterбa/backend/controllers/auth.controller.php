<?php
session_start();
include '../../config/app.php';
include '../models/class.conexion.php';
include '../models/class.auth.php';

class AuthController{
    public static function validar($user, $pass)
    {
        $user = trim($user);
        $prefijo = md5("prf_");
        $pass = sha1($prefijo.$pass);
        $respuesta = AuthModel::valLogin($user, $pass);
        if($respuesta =='1')
        {
            $_SESSION['autenticado'] = "ADMIN";
            return $respuesta;
        } else if($respuesta =='0')
        {
            $html = '<div class="alert alert-danger" role="alert">
                        Datos incorrectos!
                        <br>
                        Por favor vuelva a ingresar su datos
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                     </div>';
            return $html;
        }
        
    }
}
echo AuthController::validar($_POST['user'],$_POST['contraseña']);