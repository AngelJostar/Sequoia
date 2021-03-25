<?php 


    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $asunto = $_POST["asunto"];
    $centro = $_POST["centro"];
    $mensaje = $_POST["mensaje"]; 
    
    if($centro == "CDMX"){
        $destino = "angelrojas@ciencias.unam.mx";   
        $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nAsunto: " . $centro . "\nMensaje: " . $mensaje;
        mail($destino, "Contacto: ", $contenido);
        header("Location:gracias-por-contactarnos.php");
    }
    if($centro == "GUADALAJARA"){
        $destino = "itzeldelgado314@ciencias.unam.mx";   
        $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nAsunto: " . $centro . "\nMensaje: " . $mensaje;
        mail($destino, "Contacto: ", $contenido);
        header("Location:gracias-por-contactarnos.php");
    }
    if($centro == "MONTERREY"){
        $destino = "itzeldelgado314@ciencias.unam.mx";   
        $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nAsunto: " . $centro . "\nMensaje: " . $mensaje;
        mail($destino, "Contacto: ", $contenido);
        header("Location:gracias-por-contactarnos.php");
    }

?>