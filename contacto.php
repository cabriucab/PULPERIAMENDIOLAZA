

<?php

$nombre = $email = $Comentarios = $seleccion = $telefono = $para= NULL; 

$nombre = $_POST['Nombre'];
$telefono= $_POST['Telefono'];
$email = $_POST['email'];
$seleccion = $_POST['seleccion'];
$Comentarios = $_POST['Comentarios'];
$para = 'CABRIU@HOTMAIL.COM';
$titulo = 'ASUNTO DEL MENSAJE';
$header = 'From: ' . $email;


$msjCorreo = "RESERVA ENTRANTE\n ---------------------------------------------------------------------------\n\n\n
Nombre Cliente: $nombre\n
Telefono: $telefono\n 
E-Mail: $email\n 
Ubicación de mesa:$seleccion\n 
Comentarios Adicionales: $Comentarios";
 
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
 echo "<script language='javascript'>
 alert('Mensaje enviado, muchas gracias.');
 window.location.href = 'http://PULPERIAMENDIOLAZA.COM.AR';
</script>";

} else {
echo 'Falló el envio';
}
}

?>