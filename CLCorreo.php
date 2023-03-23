<?php
$destinatario = "ratencio@senati.pe";

   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $telefono = $_POST['telefono'];
   $mail = $_POST['email'];
   $asunto = $_POST['asunto'];

  $header = "Enviado desde la pagina de Fabrizio Jurado";

$mensajeCompleto = $asunto."\nAtentamente: " . $nombre;

  
   mail($destinatario, $mensajeCompleto,$asunto,$header);
  echo "<script>alert('Correo enviado exitosamente')</script>";
  echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>
