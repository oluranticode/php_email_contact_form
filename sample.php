<?php


require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.hostinger.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "info@strengthandcourageltd.com";
    $mail->Password = "Temitope@1";
    $mail->SetFrom("info@strengthandcourageltd.com");
    $mail->Subject = "Test";
    $mail->Body = "hello";
    $mail->AddAddress("damilotunaluko@gmail.com");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>