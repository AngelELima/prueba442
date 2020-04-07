<?php
    $destinatario = 'angel.lima.0128@gmail.com';


    $nombre = $_POST ['nombre'];
    $asunto = $_POST ['asunto'];
    $mensaje = $_POST ['mensaje'];
    $email = $_POST ['email'];

    $header = "Enviado desde la página de 442";

    $mensajeCompleto = $mensaje . "n\Atentamente" .$nombre;

    mail ($destinatario, $asunto, $mensaje, $header);

    
    echo "<script> alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>