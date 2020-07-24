<?php
require 'header.php';
require  'logincredentials.php';




?>





    <div class="content">
        <div class="animated fadeIn">

            <div class="content">
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">All registered user</strong>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">

                                        <tr>
                                            <th>ID</th>
                                            <th>UserID</th>
                                            <th>Email</th>

                                        </tr>
                                        </thead>
                                        <?php
                                        $fetchQuery = mysqli_query($conn, "SELECT * FROM users ");

                                        $sr = 1;
                                        while($row=mysqli_fetch_array($fetchQuery)){
                                            ?>
                                            <tr>
                                                <td><?php echo $sr;?></td>
                                                <td><?php echo $row['uidUsers'];?></td>
                                                <td><?php echo $row['emailUsers'];?></td>

                                            </tr>

                                            <?php $sr++; }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
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



