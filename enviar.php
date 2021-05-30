<?php

//llamado a los campos
$nombre = $_POST['nombreyapellido'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

//datos para el correo
$destinatario = "jose_anyelo634@hotmail.com";
$asunto = "Contacto desde mi web";

$carta = "De: $nombre \n";
$carta = "Correo: $correo \n";
$carta = "Telefono: $telefono \n";
$carta = "Mensaje: $mensaje";

//eviando mensaje
mail($destinatario, $asunto, $carta);
hader('location:mensaje-de-envio.html');

?>