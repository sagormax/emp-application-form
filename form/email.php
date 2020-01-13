<?php
require_once "bootstrap.php";

date_default_timezone_set('ASIA/DHAKA');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$emp    = new \App\Model\EmpRegistration();
$user   = $emp->first('where mail_send = 0 ');

if ($user === false){
    die('No data in queue.....');
}

//var_dump($user);
//var_dump($emp->update(['mail_send' => 1],  5));
//exit();

$mail = new PHPMailer(true);
try {
    $mail->IsSMTP(); // telling the class to use SMTP
     //$mail->SMTPDebug  = 2;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = '';
    $mail->Host       = getenv('MAIL_HOST');
    $mail->Port       = getenv('MAIL_PORT');
    $mail->Username   = getenv('MAIL_USER');
    $mail->Password   = getenv('MAIL_PASS');

    $mail->SetFrom(getenv('MAIL_FROM'), getenv('SITE_NAME'));
    $mail->AddReplyTo(getenv('MAIL_REPLY_TO'),getenv('SITE_NAME'));

    $mail->addAddress("besora6483@clsn1.com", 'NAME');
    $mail->addCC(getenv('MAIL_CC'), getenv('SITE_NAME'));

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject  = getenv('MAIL_SUBJECT');

    ob_start();
    $PDF_LINK = getenv('PDF_UNIQUE_NUMBER') . $user['id'] . '.pdf';
    include "mail_body.php";
    $mailBody       = ob_get_clean();
    $mail->Body     = $mailBody;

    // Send mail
    //var_dump($mail);
    if( $mail->send() ){
        echo 'Mail send done for the user of - '.$user['id'] . "<br />";

        if( $emp->update(['mail_send' => 1],  $user['id']) ){
            echo 'Update status to database also done.';
        }
    }
}
catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
