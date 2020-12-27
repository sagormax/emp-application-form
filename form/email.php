<?php
require_once "bootstrap.php";

date_default_timezone_set('ASIA/DHAKA');

use Dompdf\Dompdf;
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


// PDF generate
$fileName = getenv('PDF_UNIQUE_NUMBER') . $user['id'];
$dompdf = new Dompdf();
//$dompdf->set_option( 'dpi' , '100' );
$dompdf->set_option( 'isHtml5ParserEnabled' , true );
$dompdf->set_option( 'isRemoteEnabled' , true );

$dompdf->loadHtml(file_get_contents(__DIR__. '/../PDF/'.$fileName . ".html"));
//$dompdf->setBasePath('../');

// (Optional) Setup the paper size and orientation
//$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream();
$output = $dompdf->output();
file_put_contents(__DIR__. '/../PDF/'. $fileName . '.pdf', $output);


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

    $mail->addAddress($user['email'], 'APPLICATION USER');
    $mail->addCC(getenv('MAIL_CC'), getenv('SITE_NAME'));

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject  = getenv('MAIL_SUBJECT');

    ob_start();
    $PDF_LINK = $fileName . '.pdf';
    $UPLOADED_CV_LINK = 'uploads/' . $user['cv_name'];
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
