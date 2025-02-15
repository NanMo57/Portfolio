<?php
    $message_send = '';
    $error_message = '';
    ob_start(); 
    if(isset($_POST['submit'])){
       require (__DIR__.'/mail.php');

        // Check if fields are empty
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if(empty($name) || empty($email) || empty($message)){
            $error_message = 'All fields are required.';
        } else {
            try {
                // Sender & Recipient
                $mail->setFrom($email, $name);
                $mail->addAddress('aloqdehnancy@gmail.com'); // Where to send the email

                // Email Content
                $mail->isHTML(true);
                $mail->Subject = '';
                $mail->Body    = "<strong>Name:</strong> $name <br> <strong>Email:</strong> $email <br> <strong>Message:</strong> $message";

                if($mail->send()){
                    $message_send = 'Your message has been sent, we will contact you soon.';
                    // Reset form fields after success
                    $_POST = array();
                }
                ob_end_flush();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <div id='information'>
        <h5>Get in touch</h5>
        <div>
            <form action='' method='POST'>
                <div class="col-12 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="text" class="form-control" placeholder='Name'  name='name' value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>" required>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                        <input type="email" class="form-control" placeholder='Email' name='email' value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
                    </div>
                </div>

                <div class="col-12">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        <textarea class="form-control" placeholder="Message" name='message' required><?= isset($_POST['message']) ? $_POST['message'] : '' ?></textarea>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn-md p-2 ps-3 pe-3 rounded-3 mt-4">SEND MESSAGE</button>

                <p class='mt-2 text-success'><?= $message_send ? $message_send : '' ?></p>
                <p class='mt-2 text-danger'><?= $error_message ? $error_message : '' ?></p>
            </form>
        </div>
    </div>
</body>
</html>
