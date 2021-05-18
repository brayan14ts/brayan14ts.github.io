<?php

if (!empty($_POST)) {
    // Llamando a los campos
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];


    // Datos del receptor
    $destinatario = "brayan14ts@gmail.com";
    $asunto = "Mensaje desde brayantorrealba.com";


    // cuerpo de email
    $cuerpo  = "De: $nombre \n";
    $cuerpo .= "Correo: $correo \n";
    $cuerpo .= "Telefono: $telefono \n\n";
    $cuerpo .= "Mensaje: $mensaje";


    // Enviando Mensaje
    (mail($destinatario, $asunto, $cuerpo)) {
        echo $nombre, ", Tu mensaje fue enviado!";
    } 
}
