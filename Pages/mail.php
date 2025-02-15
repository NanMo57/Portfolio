<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require (__DIR__.'/mailer/autoload.php');


    $mail = new PHPMailer(true);

    $mail->isSMTP(); 
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true; 
    $mail->Username = 'aloqdehnancy@gmail.com'; 
    $mail->Password = 'okhw wzqy aseq dcng';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587; 
    $mail->isHTML(true);