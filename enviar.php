<?php

/* if(isset($_POST['nombre'])) {
    header("Location: /index.php");
} */

if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    header("Location: index.php");
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


if(empty(trim($nombre))) $nombre = 'anonimo';


$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>de: $nombre / $email</p>
    <h2>Mensaje</h2>
    $mensaje
HTML;

$headers ="MIME-Version:1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $nombre  <$email>\r\n ";
$headers .=  "To: damiantrajster@gmail.com\r\n";
//$headers .= "Cc: copia@email.com \r\n ";
//$headers .= "Bcc: copia@email.com\r\n ";

//Remitente
//asunto
//cuerpo
$rta= mail('damiantrajster@gmail.com', "Mensaje: $asunto", $body, $headers);



header("Location: index.php");


