<?php
$destino= "rodriblue8@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["email"];
$mensaje = $_POST["consulta"];
$contenido = "Nombre: " .$nombre . "\nCorreo: " .$correo . "\nMensaje: " .$mensaje;
mail($destino, "Contacto", $contenido);
header("Location:confirma.html");
?>
