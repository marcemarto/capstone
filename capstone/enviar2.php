<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $name . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $message . " \r\n";


$para = 'marcellamartorana@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $subject, utf8_decode($mensaje), $header);

header("Location:index.html");
?>
