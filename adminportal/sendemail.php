<?php
require_once '../contactform/libs/phpmailer/PHPMailerAutoload.php';


if (isset($_POST["subb"])) {
    $messages = $_POST["message"];
    $email = $_POST["email"];
    $email = 'intishuttle99@gmail.com';
    $password = 'intipenang99';
    $to_id = $_POST['email'];
    $message = $_POST["message"];
    $subject = 'INTI Shuttle System Admin';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
    $mail->Username = $email;
    $mail->Password = $password;
    $mail->addAddress($to_id);
    $mail->Subject = $subject;
    $mail->msgHTML($message);
    if (!$mail->send()) {
        $error = "Mailer Error: " . $mail->ErrorInfo;
        echo '<p id="para">'.$error.'</p>';
    }
    else {
        echo '<p id="para">Message sent!</p>';
        header("Location: bookingnotification.php?send=success");
    }
}
else{
    echo '<p id="para">Please enter valid data</p>';
}
?>