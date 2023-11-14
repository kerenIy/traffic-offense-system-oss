<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '/libs/phpmailer/src/Exception.php';
require '/libs/phpmailer/src/PHPMailer.php';
require '/libs/phpmailer/src/SMTP.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = SMTP_HOST;
$mail->Port = SMTP_PORT;
$mail->SMTPSecure = true;
$mail->SMTPAuth = true;
$mail->Username = SMTP_USERNAME;
$mail->Password = SMTP_PASSWORD;
$mail->From = FROM_EMAIL;