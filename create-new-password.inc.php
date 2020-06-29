<?php

if(isset($_POST["reset-password-submit"])){

    $selector = $_POST['selector'];
    $validator = $_POST['validator'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($selector) || empty($passwordRepeat)){
        header("Location:create-new-password.php?newpwd=empty");
        echo "<script>alert('Please do not leave fields empty!');</script>";
        echo "<script>location.href=\"http://localhost:8080/INTI-Shuttle-System/resetpassword.php?reset=problem\"</script>";
        exit();
    }
    elseif ($password != $passwordRepeat){
        header("Location:create-new-password.php?newpwd=passwordnotmatch");
        echo "<script>alert('Password doesnt match!');</script>";
        echo "<script>location.href=\"http://localhost:8080/INTI-Shuttle-System/resetpassword.php?reset=fail\"</script>";
        exit();
    }

    $currentDate = date("U");

    require 'logincredentials.php';

    $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND  pwdResetExpires >= ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "There was an error!";
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,"ss",$selector,$currentDate);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if (!$row = mysqli_fetch_assoc($result)){
            echo "<script>alert('You need to re-submit your reset request!');</script>";
            echo "<script>location.href=\"http://localhost:8080/INTI-Shuttle-System/resetpassword.php?reset=linkexpired\"</script>";
            exit();
        }else{
            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin,$row["pwdResetToken"]);

            if (($tokenCheck == false)){
                echo "<script>alert('You need to re-submit your reset request 2!');</script>";
                echo "<script>location.href=\"http://localhost:8080/INTI-Shuttle-System/resetpassword.php?reset=problem\"</script>";
                exit();
            }elseif ($tokenCheck === true){

                $tokenEmail = $row['pwdResetEmail'];

                $sql = "SELECT * FROM users WHERE emailUsers=?;";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt,$sql)){
                    echo "<script>alert('There is problem occured!');</script>";
                    echo "<script>location.href=\"http://localhost:8080/INTI-Shuttle-System/resetpassword.php?reset=problem\"</script>";
                    exit();
                }else{
                    mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if (!$row = mysqli_fetch_assoc($result)) {
                        echo "<script>alert('The entered email is not registered as user email!');</script>";
                        echo "<script>location.href=\"http://localhost:8080/INTI-Shuttle-System/resetpassword.php?reset=notexist\"</script>";
                        exit();
                    }else{
                        $sql = "UPDATE users SET pwdUsers=? WHERE emailUsers=?";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt,$sql)){
                            echo "<script>alert('There is problem updating user new password!');</script>";
                            echo "<script>location.href=\"http://localhost:8080/INTI-Shuttle-System/resetpassword.php?reset=problem\"</script>";
                            exit();
                        }else{
                            $newPwdHash = password_hash($password,PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt,"ss",$newPwdHash,$tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
                            $stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt,$sql)){
                                echo "<script>alert('There is problem deleting email from pwdreset table!');</script>";
                                echo "<script>location.href=\"http://localhost:8080/INTI-Shuttle-System/resetpassword.php?reset=problem\"</script>";
                                exit();
                            }else{
                                mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location:resetpassword.php?newpwd=passwordupdated");
                            }



                        }

                    }

                }
            }
        }
    }
}
else {
    header("Location:index.php");

}

?>
