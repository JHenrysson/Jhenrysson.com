<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'mailcluster.loopia.se';
$mail->SMTPAuth = true;
$mail->Username = 'contact@jhenrysson.com';
$mail->Password = 'J071592j!';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->CharSet = 'UTF-8';

$mail->From = 'contact@jhenrysson.com';
$mail->FromName = 'Joselyn Henrysson';
$mail->addAddress('joselyngodoy792@gmail.com');
$mail->addReplyTo('contact@jhenrysson.com', 'Contact');

$mail->Subject = 'Test';
$mail->Body = 'Test message';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>