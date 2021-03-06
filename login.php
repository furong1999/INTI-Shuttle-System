<?php
require 'headerr8.php';

require 'logincredentials.php';

$username_err = $password_err = "";

if(isset($_POST['login-submit'])){



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
                    if ($username == "bus" && $password == "bus") {
                        $_SESSION['bus'] = $username;
                        echo "<script>alert('Successfully login!');</script>";
                        echo "<script>location.href=\"index.php\"</script>";
                        exit();

                    }if ($username == "bus2" && $password == "bus2") {
                        $_SESSION['bus2'] = $username;
                        echo "<script>alert('Successfully login!');</script>";
                        echo "<script>location.href=\"index.php\"</script>";
                        exit();

                    }if ($username == "bus3" && $password == "bus3") {
                        $_SESSION['bus3'] = $username;
                        echo "<script>alert('Successfully login!');</script>";
                        echo "<script>location.href=\"index.php\"</script>";
                        exit();

                    }if ($username == "admin" && $password == "admin" ){
                        echo "<script>alert('Successfully login!');</script>";
                        echo "<script>location.href=\"adminportal/index.php\"</script>";

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

<br><br>
<!--Login form-->
<div class="main">

    <section class="signup">
        <div class="login-container">
            <div class="signup-content">
                <form action="login.php" method="POST">
                    <h2 class="form-title">Login Account</h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="uid" placeholder="Username"/>
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-input" name="pwd" id="password" placeholder="Password"/>
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <button type="submit"class="form-submit" name="login-submit">Login</button>
                    </div>
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
