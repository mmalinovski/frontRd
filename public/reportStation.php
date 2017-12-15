<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

require_once('phpmail/mailer/src/PHPMailer.php'); 
require_once('phpmail/mailer/src/Exception.php'); 
require_once('phpmail/mailer/src/SMTP.php'); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


        // if(isset($_POST['email'])){
        //   $email=$_POST['email'];
        // }if(isset($_POST['message'])){
        //   $email=$_POST['message'];
        // }if(isset($_POST['g-recaptcha-response'])){
        //   $captcha=$_POST['g-recaptcha-response'];
        // }
        // if(!$captcha){
        //   echo '<h2>Please check the the captcha form.</h2>';
        //   exit;
        // }
        // $secretKey = "6LfNfzYUAAAAALb5-kQctF4ooPIGhYl2Af1qKs70";
        // $ip = $_SERVER['REMOTE_ADDR'];
        // $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        // $responseKeys = json_decode($response,true);
        // if(intval($responseKeys["success"]) !== 1) {
        //   echo '<h2>You are spammer ! Get out</h2>';
        // } else {

          // echo '<h2>Thanks for posting comment.</h2>';

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.live.net.mk';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'zikol.livenetworks';                 // SMTP username
    $mail->Password = 'daliborku$!';                           // SMTP password
    $mail->SMTPSecure = false;                            // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPAutoTLS = false;
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('info@nextuner.com', 'Nextuner');     // Add a recipient (send mail to to)
    // $mail->addAddress('ellen@example.com');               
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Station Report!';
    $mail->Body    = $_POST['message'];
    $mail->Station = $_POST['stationSlug'];
    $mail->AltBody =  $_POST['message'];

    $mail->send();
    // echo 'Message has been sent';
    header("Location: /");
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


        // }




