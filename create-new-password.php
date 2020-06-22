
<?php

include("headerr8.php");

?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_all.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Signup</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home<i class="ion-ios-arrow-forward"></i></a></span> <span>SignUp <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container-fluid px-4">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-7 text-center heading-section ftco-animate">
                </div>
            </div>
        </div>
    </section>

    <!--New password form-->
    <div class="main">
        <section class="signup">

                    <div class="main">
                        <section class="signup">
                        <div class="login-container">
                            <div class="signup-content">
                                <form action="reset-password.inc.php" method="POST">
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












