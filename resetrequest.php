<?php
session_start();



if (isset($_POST["reset-request-submit"])){

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    $url = "http://localhost:8080/INTI-Shuttle-System/create-new-password.php?selector=" .$selector. "&validator=". bin2hex($token);

    $expires = date("U") + 1800;

    require 'logincredentials.php';

    $userEmail = $_POST["email"];

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)){
        echo "There was an error1!";
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"s",$userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)){
        echo "There was an error2!";
        exit();
    }
    else{
        $hashedToken = password_hash($token,PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt,"ssss",$userEmail,$selector,$hashedToken,$expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);


    require'contactform/libs/phpmailer/PHPMailerAutoload.php';

    if(isset($_POST['reset-request-submit']))
    {
        $email = 'intishuttle99@gmail.com';
        $password = 'intipenang99';
        $to_id = $_POST['email'];
        $message = '<p>We have received a password reset request. If you didn\'t make this request, you can ignore this email.
The link to reset your password is as below.<br> Here is your password reset link:<br> <a href="' .$url. '">'. $url .' </p>';
        $subject = 'INTI Shuttle System Reset Password Link';
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
        header("Location: resetpassword.php?reset=success");
        }
        }
        else{
        echo '<p id="para">Please enter valid data</p>';
        }



} else {
    header("Location:index.php");

}
