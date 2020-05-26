
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="colorlib-regform-7/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="colorlib-regform-7/css/style.css">
    <link rel="stylesheet" href="colorlib-regform-7/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="colorlib-regform-7/css/style.css">

</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" class="form-input" name="uid" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" class="form-input" name="mail" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" class="form-input" name="pwd" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" class="form-input" name="pwd-repeat" placeholder="Retype password"/>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit"class="form-submit" name="signup-submit">Sign up</button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="colorlib-regform-7/images/campus.jpg" alt="sign up image"></figure>
                        <form action="login.php" method="POST">
                            <p class="loginhere">
                                Already have an account ? <a href="login.php" class="loginhere-link">Login Here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <!-- JS -->
    <script src="colorlib-regform-7/vendor/jquery/jquery.min.js"></script>
    <script src="colorlib-regform-7/js/main.js"></script>
    <script src="colorlib-regform-7/vendor/jquery/jquery.min.js"></script>
    <script src="colorlib-regform-7/js/main.js"></script>

</body>
</html>