<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
    // Recibir y sanitizar los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $asunto = htmlspecialchars($_POST['asunto']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Datos del correo electrónico
    $to = "konstantinsaki@gmail.com"; // Cambia esto por tu dirección de correo electrónico
    $subject = "Formulario de Contacto: " . $asunto;
    $message = "Nombre: " . $nombre . "\nCorreo Electrónico: " . $email . "\nMensaje: " . $mensaje;
    $headers = "From: no-reply@ejemplo.com"; // Dirección del remitente

    // Enviar correo electrónico
    if (mail($to, $subject, $message, $headers)) {
        echo "Gracias por contactarnos. Te responderemos pronto.";
    } else {
        echo "Error al enviar el formulario. Inténtalo de nuevo más tarde.";
    }
 }
