<?php
class NavController {
    public static function index()
    {
        include '../views/layouts/app.php'; 
    }
    public static function head()
    {
        include '../views/partials/head.html';
    }
    public static function navbar()
    {
        include '../views/partials/menu_nav.html';
    }
    public static function foot()
    {
        include '../views/partials/footer.html';
    }  
    public static function inicio()
    {
        include '../views/pages/inicio.php';
    }
    public static function nosotros()
    {
        include '../views/pages/nosotros.php';
    }
    public static function productos()
    {
        include '../views/pages/productos.php';
    }
    public static function contacto()
    {
       include '../views/pages/contacto.php';
    }
    public static function coment()
    {
        include '../views/pages/coment.php';
    }
    public static function backend()
    {
        include '../views/pages/backlogin.php';
    }
}
?>
