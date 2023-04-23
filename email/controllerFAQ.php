<?php 

//GET VARS
$nombre = isset($_POST['help_name'])?addslashes($_POST['help_name']):'';
$mensajeCompleto="";
$email = isset($_POST['help_email'])?addslashes($_POST['help_email']):'';
$subject=isset($_POST['help_subject'])?addslashes($_POST['help_subject']):'';
$mensaje = isset($_POST['help_question'])?addslashes($_POST['help_question']):'';

$mensajeCompleto.=$mensaje;

//CONFIG PHPMAILER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
date_default_timezone_set('Etc/UTC');
require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;  // SMTP::DEBUG_OFF = off;
$mail->SMTPAutoTLS = false;
$mail->SMTPSecure = false;
$mail->Host = 'tecnosula.com';
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->isHTML(true);
$mail->Username = 'contacto@tecnosula.com';
$mail->Password = 'C0nt@ct0/2022';
$mail->setFrom('contacto@tecnosula.com', 'West Side Home Inspection');

 
    $mail->addAddress('olman1000@gmail.com', 'Cliente');
    $mail->Subject = 'You have a contact from your website';
    $mail->Body = "
    <h2>New contact</h2>
    <p>We received the next request from your website: </p> <br>
    <p>Name: <b>". $nombre ."</b></p>
    <p>Email: <b>". $email ."</b></p>
  <p>Phone: <b>". $subject ."</b></p>
    <p>Request: <br>". $mensajeCompleto ."</p>
    
    "; 



//ENVIO DE CORREO
if (!$mail->send()) {
//echo 'Mailer Error: ' . $mail->ErrorInfo;
header("Refresh:0; url=../index.php");
} else {
header("Refresh:0; url=../index.php");
}


?>
