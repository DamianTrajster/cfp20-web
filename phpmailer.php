


<?php

/* if(isset($_POST['nombre'])) {
    header("Location: /index.php");
} */

if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    header("Location: /index.php");
}


require __DIR__  . '/phpmailer/PHPMailer.php';
require __DIR__ . '/phpmailer/Exception.php';
require  __DIR__  . '/phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$apellido = $_POST['apellido'];
$mensaje = $_POST['mensaje'];



if(empty(trim($nombre))) $nombre = 'anonimo';


$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>de: $nombre / $email</p>
    <h2>Mensaje</h2>
    $mensaje
HTML;

/* $mail = new PHPMailer();

$mail->setFrom($email ,"$nombre");
$mail->addAddress('damiankio1985@gmail.com', 'SITIO');
$mail->Subject = "Mensaje: $asunto";
$mail->msgHTML($body);
$mail->AltBody= strip_tags($body);
$rta = $mail->send();
 */


$mail = new PHPMailer();


try {


     /*  $mail->SMTPDebug = SMTP::DEBUG_SERVER;     */                  //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'damiantrajster@gmail.com';                     //SMTP username
      $mail->Password   = 'cmnslparpsfijrjr';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS  ;         //Enable implicit TLS encryption
      $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
   


      $mail->IsHTML(true);
      $mail->setFrom($email ,"$nombre");
      $mail->Subject = "Mensaje: $apellido";
      $mail->Body = $body;
      $mail->AddAddress("damiantrajster@gmail.com");
  
   
      $mail->send();
      echo  json_encode('exito');
   
      

    
}catch(Exception $e) {
    echo  json_encode('error');
}

?>

