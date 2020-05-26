

<?php


$username_err = $password_err = "";

if(isset($_POST['login-submit'])){

    require 'logincredentials.php';

    $username = $_POST['uid'];
    $password = $_POST['pwd'];

    if(empty($username)|| empty($password)){
        echo "<script>alert('Login form not filled completely!');</script>";
        echo "<script>location.href=\"login.php\"</script>";
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("location: login.php?error=sqlerror");
            exit();
        }
        else{

            mysqli_stmt_bind_param($stmt,"ss",$username,$password);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false) {
                    // Display an error message if password is not valid
                    $password_err = "The password you entered was not valid.";
                    echo "<script>alert('Wrong password!');</script>";
                    echo "<script>location.href=\"login.php\"</script>";
                    exit();

                } else if ($pwdCheck == true) {
                    if ($username == "admin" && $password == "admin") {
                        $_SESSION['admin'] = $username;
                        echo "<script>alert('Successfully login!');</script>";
                        echo "<script>location.href=\"adminportal/index.php\"</script>";
                        exit();
                    } else if ($_SESSION['user'] = $username) {
                        echo "<script>alert('Successfully login!');</script>";
                        echo "<script>location.href=\"index.php\"</script>";
                        exit();
                    }

                }
            }

            else{
                // Display an error message if username doesn't exist
                $username_err = "No account found with that username.";
                echo "<script>alert('No account found with that username!');</script>";
                echo "<script>location.href=\"login.php\"</script>";
                exit();
            }
        }

    }


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

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
<!--  Login  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="colorlib-regform-7/images/computer.jpg" alt="sign in image"></figure>
                <form action="login.php" method="POST">
                    <p class="loginhere">
                        Haven't register? <a href="signup.php" class="loginhere-link">Register here</a>
                    </p>
                </form>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Sign In</h2>
                <form method="POST" class="register-form" id="login-form">
                    <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" class="form-input" name="uid" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" class="form-input" name="pwd" id="password" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                       <a href="#" class="link">Forget Password
                    </div>
                    <div class="form-group form-button">
                        <button type="submit" class="form-submit" name="login-submit">Login</button>
                    </div>
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
