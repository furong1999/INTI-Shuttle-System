<?php
require 'headerr8.php';

?>



<br><br>

<!--Reset Password form-->
<div class="main">
    <section class="signup">
        <div class="login-container">
            <div class="signup-content">
                <form action="resetrequest.php" method="POST">
                    <h2 class="form-title">Reset Password</h2>
                    <?php
                    if (isset($_GET["reset"])) {
                        if ($_GET["reset"] == "success") {
                            echo '<p class= "signupsuccess"> An e-mail has been sent to your email with instructions.<br>Please check your email!</p>';
                        } elseif ($_GET["reset"] == "fail") {
                            echo '<p class= "signupsuccess"> Your newly entered password doesnt match!<br>Please proceed to your email and click the link again!</p>';
                        } elseif ($_GET["reset"] == "problem") {
                            echo '<p class= "signupsuccess"> There is problem resetting your password !<br>Please proceed to your email and click the link again!</p>';
                        } elseif ($_GET["reset"] == "linkexpired") {
                            echo '<p class= "signupsuccess"> The link is expired!<br>Please enter your email again!</p>';
                        }elseif ($_GET["reset"] == "notexist") {
                            echo '<p class= "signupsuccess"> Your Email is not registered as user email!<br>Please enter a valid email!</p>';
                        }

                    }


                    if (isset($_GET["newpwd"])){
                        if($_GET["newpwd"]== "passwordupdated"){
                            echo "<script>alert('Your password has been reset!');</script>";
                            echo "<script>location.href=\"login.php\"</script>";
                        }
                    }
                    ?>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email"  placeholder="Enter your e-mail address"/>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-submit" name="reset-request-submit">Submit</button>
                    </div>
                </form>
                <form action="login.php" method="POST">
                    <p class="loginhere">
                        Register an account ? <a href="signup.php" class="loginhere-link">Register here</a>
                    </p>
                </form>


            </div>
        </div>
    </section>
</div>
