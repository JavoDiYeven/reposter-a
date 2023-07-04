<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $comentario = $_POST['comentario'];

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);

    //servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'yuyudelourdes@gmail.com';
    $mail->Password = 'Laura#180819';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 587;

    //remitente y destinatario del correo
    $mail->setFrom($correo, $nombre);
    $mail->addAddress('yuyudelourdes@gmail.com', 'Destinatario');
    $mail->Subject = 'Mensaje de contacto';
    $mail->Body = $comentario;

    try {
        $mail->send();
        echo 'Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.';
    } catch (Exception $e) {
        echo 'Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.';
    }
} else {
    echo 'Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.';
}
?>

