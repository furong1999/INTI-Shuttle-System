<?php
require 'header.php';
require 'logincredentials.php';




?>



    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Sent Email To User</strong>
                        </div>
                        <div class="card-body">
                            <div id="pay-invoice">
                                <div class="card-body">
                                    <div class="card-title">

                                        <h3 class="text-center">Email Form</h3>
                                    </div>
                                    <?php
                                    if (isset($_GET["send"])) {
                                        if ($_GET["send"] == "success") {
                                            echo '<p class= "signupsuccess"> Email was successfully sent to user!</p>';
                                        }
                                    }
                                    ?>
                                    <hr>
                                    <form action="sendemail.php" method="post" novalidate="novalidate">
                                        <div class="form-group text-center">
                                            <ul class="list-inline">

                                            </ul>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class=" form-control-label">Email</label><input type="text" name="email" id="email" placeholder="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="message" class=" form-control-label">Message</label><input type="text" name="message" id="message" placeholder="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="subb" value="Send"  class="btn btn-primary py-3 px-5">
                                        </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div> <!-- .card -->

                </div>
            </div>
        </div>




    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>






<footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
                Copyright
            </div>
            <div class="col-sm-6 text-right">
                Designed by INTI Student <br>Copyright &copy; 2020 INTI Shuttle
            </div>
        </div>
    </div>
</footer>