<?php
require 'newlester/mail/class.phpmailer.php';
require 'newlester/newsletter.php';
//require 'newlester/mail/class.smtp.php'; //incluimos la clase para env穩os por SMTP

 
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet="UTF-8";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "netcode.barinas@gmail.com";
$mail->Password = "Dmoreno1828";
$mail->FromName = 'Netcode | Agencia de Diseño y Desarrollo Web';
$mail->From = 'info@netcode.com.ve';
$mail->AddAddress('info@netcode.com.ve', 'NETCODE C.A');
$mail->AddAddress($email, $nombre);
$mail->Subject = 'Correo Enviado a Netcode | Agencia de Diseño y Desarrollo Web';
$mail->MsgHTML($mensaje);//cuerpo con html 
//adjuntos un archivo al mensaje
$mail->Send(); 


?>
