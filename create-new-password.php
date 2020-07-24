
<?php

include("headerr8.php");

?>



    <!--New password form-->
    <div class="main">
        <section class="signup">
            <?php
            $selector = $_GET["selector"];
            $validator = $_GET["validator"];

            if (empty($selector)|| empty($validator)){
                echo "<script>alert('Could not validate your request!');</script>";
                echo "<script>location.href=\"http://localhost:8080/INTI-Shuttle-System/resetpassword.php?reset=fail\"</script>";
            }
            else{
                if (ctype_xdigit($selector) !== false && (ctype_xdigit($validator) !== false)){
                    ?>
                    <div class="main">
                        <section class="signup">
                        <div class="login-container">
                            <div class="signup-content">
                                <form action="create-new-password.inc.php" method="POST">
                                    <h2 class="form-title">Change new password</h2>
                                    <div class="form-group">
                                        <input  type="hidden" name="selector" value="<?php echo $selector ?>">
                                    </div>
                                    <div class="form-group">
                                        <input  type="hidden" name="validator" value="<?php echo $validator ?>">
                                    </div>
                                    <div class="form-group">
                                        <input  type="password" class="form-input" name="pwd" placeholder="Enter a new password">
                                    </div>
                                    <div class="form-group">
                                        <input  type="password" class="form-input" name="pwd-repeat" placeholder="Repeat new password">
                                    </div>
                                <div class="form-group">
                                    <button type="submit"class="form-submit" name="reset-password-submit">Reset Password</button>
                                </div>
                                </form>
                            </div>
                        </div>
                </div>
        </section>
    </div>

                <?php    }
                }
                        ?>












