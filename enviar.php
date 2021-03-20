<?php 

    $destino = "angelrojas@ciencias.unam.mx";   
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $asunto = $_POST["asunto"];
    $centro = $_POST["centro"];
    $mensaje = $_POST["mensaje"]; 
    
    if ($_POST['centro'] == 'CDMX') {
        $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nAsunto: " . $centro . "\nMensaje: " . $mensaje;
        mail($destino, "Contacto: ", $contenido);
        header("Location:gracias.php");
    }


?>