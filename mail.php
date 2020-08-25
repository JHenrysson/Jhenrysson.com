<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer();
//SMTP- see notes

$mail->isSMTP();
$mail->Host = 'mailcluster.loopia.se';
$mail->SMTPAuth = true;
$mail->Username = 'contact@jhenrysson.com';
$mail->Password = 'J071592j!';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->CharSet = 'UTF-8';

$mail->From = $_POST['email'];
$mail->FromName = 'Website Inquiry';
$mail->addAddress('jhenrysson0715@gmail.com');

$mail->Subject = $_POST['firstname'];
$mail->Body = $_POST['subject'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
header("Location: ./?home");
die();
}
?>