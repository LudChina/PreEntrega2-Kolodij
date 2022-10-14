<?php

$nombre= $_POST['nombre'];
$email= $_POST['email'];
$mensaje= $_POST['consulta'];

$mensaje= "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje .= "Su email es" . $email . "\r\n";
$mensaje .= "Consulta" . $_POST['mensaje'] . "\r\n";
$mensaje .= "Enviado el" . date('d/m/y', time());

$destinatario= "chinakolodij@gmail.com";
$asunto= "Este email fue enviado desde Sumire Tejidos";

mail($destinatario, $asunto, utf8_decode($mensaje), $header);

header('Location:./saludo.html');


?>