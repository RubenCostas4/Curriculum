<?php
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $tema = $_POST['subject'];
    $mensaje = $_POST['message'];

    $destinatario = 'costasruben@hotmail.com';
    $asunto = 'Nuevo mensaje de contacto';

    $contenido = "Nombre: $nombre\n\nEmail: $email\n\nTema: $tema\n\nMensaje: $mensaje";

    $encabezados = "From: $nombre <$email>";

    mail($destinatario, $asunto, $contenido, $encabezados);

    // Redireccionar al usuario a una página de éxito o mostrar un mensaje de éxito
    header('Location: contacto_exito.html');
    exit();
?>