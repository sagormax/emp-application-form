<?php
require_once "bootstrap.php";

date_default_timezone_set('ASIA/DHAKA');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
try {
    $mail->IsSMTP(); // telling the class to use SMTP
     //$mail->SMTPDebug  = 2;
    $mail->SMTPAuth   = "true";
    $mail->SMTPSecure = "tls";
    $mail->Host       = getenv('MAIL_HOST');
    $mail->Port       = getenv('MAIL_PORT');
    $mail->Username   = getenv('MAIL_USER');
    $mail->Password   = getenv('MAIL_PASS');

    $mail->SetFrom(getenv('MAIL_FROM'), getenv('SITE_NAME'));
    $mail->AddReplyTo(getenv('MAIL_REPLY_TO'),getenv('SITE_NAME'));

    $mail->addAddress(getenv('MAIL_CC'), 'NAME');
    $mail->addCC(getenv('MAIL_CC'), getenv('SITE_NAME'));

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject  = getenv('MAIL_SUBJECT');

    ob_start();
    include "mail_body.php";
    $mailBody       = ob_get_clean();
    $mail->Body     = $mailBody;

    // Send mail
    //var_dump($mail);
    $mail->send();
}
catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
