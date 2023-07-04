<?php
class Backend
{
    public static function index()
    {
        if(isset($_SESSION['autenticado']))
        {
        include '../views/layouts/app.php';
        }
        else 
        {
            LoginController::login();
        }
    }
}
?>