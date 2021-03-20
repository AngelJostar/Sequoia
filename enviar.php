<?php 

    $destino = "angelrojas@ciencias.unam.mx";   
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $asunto = $_POST["asunto"];
    $centro = $_POST["centro"];
    $mensaje = $_POST["mensaje"]; 
    

    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nAsunto: " . $asunto ."\nCentro". $centro . "\nMensaje: " . $mensaje;
    mail($destino, "Contacto: ", $contenido);
    header("Location:gracias.php");
?>