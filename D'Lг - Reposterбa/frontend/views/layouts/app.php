<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge;chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/about.style.css">
    <link rel="stylesheet" href="assets/css/contact.style.css">
    <link rel="stylesheet" href="assets/css/content.style.css">
    <link rel="stylesheet" href="assets/css/foothead.style.css">
    <link rel="stylesheet" href="assets/css/coment.style.css">
    <link rel="stylesheet" href="assets/css/nav.style.css">
    <link rel="stylesheet" href="assets/css/products.style.css">
    <link rel="stylesheet" href="assets/css/start.style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="assets/js/coment.js"></script>
    <title>D'Lú Repostería</title>
</head>
<body>
    <header>
        <?php
        NavController::navbar();
        NavController::head();
        
        ?>
    </header>
    <main>
        <?php
            $modulo = isset($_GET['pag']) ? $_GET['pag'] : 'inicio';

            switch($modulo)
            {
                case 'inicio':
                    NavController::inicio();
                    break;
                case 'nosotros':
                    NavController::nosotros();
                    break;
                case 'productos':
                    NavController::productos();
                    break;
                case 'contacto':
                    NavController::contacto();
                    break;
                case 'preguntas':
                    NavController::coment();
                    break;
                default:
                    NavController::inicio();
                    break;
            }
        ?>
    </main>
    <footer> 
        <?php
            NavController::foot();
        ?>
    </footer>
</body>
</html>
