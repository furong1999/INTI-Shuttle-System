<?php

include("headerr8.php");

?>

<?php
if(isset($_POST['signup-submit'])){

    require 'logincredentials.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];




    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
        echo "<script>alert('Signup form not filled completely!');</script>";
        echo "<script>location.href=\"signup.php\"</script>";
        exit();
    }
    else if (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
        echo "<script>alert('Invalid email!');</script>";
        echo "<script>location.href=\"signup.php\"</script>";
        exit();
    }
    else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Invalid email!');</script>";
        echo "<script>location.href=\"signup.php\"</script>";
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        echo "<script>alert('Invalid username!');</script>";
        echo "<script>location.href=\"signup.php\"</script>";
        exit();
    }
    else if($password !== $passwordRepeat){
        echo "<script>alert('Password doesnt match!');</script>";
        echo "<script>location.href=\"signup.php\"</script>";
        exit();
    }
    else{

        $sql ="SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location: signup.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck=mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0){
                echo "<script>alert('Username already exist!');</script>";
                echo "<script>location.href=\"signup.php\"</script>";
                exit();
            }
            else {

                $sql = "INSERT INTO users (uidUsers,emailUsers,pwdUsers) VALUES (?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: signup.php?error=sqlerror");
                    exit();
                }
                else{
                    $hashedPwd=password_hash($password,PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedPwd);
                    mysqli_stmt_execute($stmt);
                    echo "<script>alert('Successfully signup!');</script>";
                    echo "<script>location.href=\"signup.php\"</script>";
                    exit();
                }
            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}


?>



<section class="ftco-section">
    <div class="container-fluid px-4">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Signup</span>
            </div>
        </div>
    </div>
</section>

    <!--Sign up form-->
    <div class="main">
        
        <section class="signup">
            <div class="login-container">
                <div class="signup-content">
                    <form action="signup.php" method="POST">
                        <h2 class="form-title">Signup Account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="uid" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="mail" id="email" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="pwd" id="password" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="pwd-repeat" placeholder="Retype password"/>
                        </div>
                        <div class="form-group">
                            <button type="submit"class="form-submit" name="signup-submit">Signup</button>
                        </div>
                    </form>
                    <form action="login.php" method="POST">
                        <p class="loginhere">
                           Have an account ? <a href="login.php" class="loginhere-link">Login here</a>
                        </p>
                    </form>
                    <form action="resetpassword.php" method="POST">
                        <p class="loginhere">
                            Forget passsword ? <a href="resetpassword.php" class="loginhere-link">Reset here</a>
                        </p>
                    </form>
                </div>
            </div>
        </section>
    </div>

