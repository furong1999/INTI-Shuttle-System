<?php
session_start();
require_once 'contactform/libs/phpmailer/PHPMailerAutoload.php';



if (isset($_POST["subb"])) {
    $name = $_POST["name"];
    $message = $_POST["message"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    if(( empty($name) || empty($message) || empty($email) || empty($phone) )  ) {
        echo "<script>alert('Message form not filled completely!');</script>";
        echo "<script>location.href=\"contactus.php\"</script>";
        exit();
    }
    else{
        $m=new PHPMailer;
        $m->isSMTP();
        $m->SMTPAuth=true;
        $m->Host='smtp.gmail.com';
        $m->Username='intishuttle99@gmail.com';//replace with your email address(The website owner email)
        $m->Password='intipenang99';//replace with your password(The website owner's email password)
        $m->SMTPSecure='ssl';
        $m->Port=465;

        $m->isHTML();
        $m->Subject ='INTI Shuttle Message Form';
        $m->Body='From:'.$name.'<p>Phone:'.$phone.'<p>Email:' .$email.'<p>Message:'.$message.'</p>';

        $m->FromName='Contact Form User';
        $m->AddAddress('intishuttle99@gmail.com','INTI Shuttle Admin');
        if ($m->send()) {
            echo "<script>alert('Message Successfully sent!');</script>";
            echo "<script>location.href=\"contactus.php\"</script>";
            die();
        }else{
            echo "<script>alert('Message sent failed!');</script>";
            echo "<script>location.href=\"contactus.php\"</script>";
            die();
        }
    }

}


