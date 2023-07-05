<?php
class AuthModel{
    public static function valLogin($user, $pass)
    {
        $sql = "SELECT * FROM tbl_users WHERE nombre = $user AND password = '$pass' AND estado = '1'";
        $conexion = new Conexion();
        $respuesta = $conexion->query($sql);
        if($respuesta->num_rows === 0)
        {
            return '0';
        }
        else
        {
            return '1';
        }

    }
}