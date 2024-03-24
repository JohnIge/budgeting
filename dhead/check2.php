<?php
session_start();

$dept = $_SESSION['dept'];

include_once('incl/config.php');

if (isset($_POST['submit'])) {


    $driver = trim($_POST['driver']);
    $pool = trim($_POST['pool']);
    $units = trim($_POST['units']);
    $regtime = time();

    $querye = "INSERT INTO costpooltrans VALUES (0,'$pool', '$driver', '$units', '$dept')";
    $result = mysqli_query($dbc, $querye);
} else {


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ABB - Department Head - Add Cost</title>

        <link href="admin/demo/webpage/chain/css/style.default.css" rel="stylesheet">
        <link href="admin/demo/webpage/chain/css/morris.css" rel="stylesheet">
        <link href="admin/demo/webpage/chain/css/select2.css" rel="stylesheet" />
        <link href="admin/demo/webpage/chain/css/morris.css" rel="stylesheet">
        <link href="admin/demo/webpage/chain/css/tunjicss.css" rel="stylesheet">
    </head>

    <body>

        <header>
            <div class="headerwrapper">
                <a href="indexv.html" class="logo">
                    <img src="asset/images/logo.png" alt="" />
                </a>
            </div><!-- headerwrapper -->
        </header>

        <section>
            <div class="mainwrapper">
                <div class="leftpanel">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="profile.html">
                            <img class="img-circle" src="admin/images/noimage.jpg" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">&nbsp;</h4>

                        </div>
                    </div><!-- media -->

                    <h5 class="leftpanel-title">Navigation</h5>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#"><i class="fa fa-user"></i> <span>View Budget</span></a>
                        <li class=""><a href="../register/login.php"><i class="fa fa-wrench"></i><span>Logout</span></a></li>

                    </ul>

                </div><!-- leftpanel -->

                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-user "></i></a></li>
                                    <li><a href="superadmin.html">Assignment page</a></li>
                                    <li></li>
                                </ul>
                                <h4>Assign Cost Driver</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->


                    <div class="contentpanel">
                        <div class="panel panel-babcock">
                            <div class="panel-heading">
                                <h4>Select your cost driver(s) and cost pool(s)</h4>


                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" action="check2.php" method="post">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Cost Driver</label>
                                                <div class="col-md-6">
                                                    <select id="Role" name="driver" class="form-control">
                                                        <option>--Select--</option>
                                                        <?php

                                                        $query = "SELECT * FROM costdriver WHERE Department ='$dept'";

                                                        echo $query;
                                                        $result = mysqli_query($dbc, $query);
                                                        $row = mysqli_fetch_array($result);
                                                        $numrows = mysqli_num_rows($result);

                                                        do {
                                                        ?>
                                                            <option> <?php echo $row['Drivername']   ?> </option>

                                                        <?php
                                                        } while ($row = mysqli_fetch_array($result));
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Cost pool</label>
                                                <div class="col-md-6">
                                                    <select id="Role" name="pool" class="form-control">
                                                        <option>--Select--</option>
                                                        <?php

                                                        $query = "SELECT * FROM costpool";

                                                        $result = mysqli_query($dbc, $query);
                                                        $row = mysqli_fetch_array($result);
                                                        $numrows = mysqli_num_rows($result);

                                                        do {
                                                        ?>
                                                            <option> <?php echo $row['Poolname'] ?> </option>

                                                        <?php
                                                        } while ($row = mysqli_fetch_array($result));
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Units</label>
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" id="name" placeholder="20" name="units">
                                                </div>
                                            </div>










                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="form-group col-md-6">
                                                    <button class="btn-sm btn btn-success" name="submit"><i class="fa fa-check"></i> Assign</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>




                                </div><!-- row -->
                            </div>

                        </div>


                    </div><!-- contentpanel -->


                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>


        <script src="admin/demo/webpage/chain/js/jquery-1.11.1.min.js"></script>
        <script src="admin/demo/webpage/chain/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="admin/demo/webpage/chain/js/bootstrap.min.js"></script>
        <script src="admin/demo/webpage/chain/js/modernizr.min.js"></script>
        <script src="admin/demo/webpage/chain/js/pace.min.js"></script>
        <script src="admin/demo/webpage/chain/js/retina.min.js"></script>
        <script src="admin/demo/webpage/chain/js/jquery.cookies.js"></script>

        <script src="admin/demo/webpage/chain/js/flot/jquery.flot.min.js"></script>
        <script src="admin/demo/webpage/chain/js/flot/jquery.flot.resize.min.js"></script>
        <script src="admin/demo/webpage/chain/js/flot/jquery.flot.symbol.min.js"></script>
        <script src="admin/demo/webpage/chain/js/flot/jquery.flot.crosshair.min.js"></script>
        <script src="admin/demo/webpage/chain/js/flot/jquery.flot.categories.min.js"></script>
        <script src="admin/demo/webpage/chain/js/flot/jquery.flot.pie.min.js"></script>
        <script src="admin/demo/webpage/chain/js/morris.min.js"></script>
        <script src="admin/demo/webpage/chain/js/raphael-2.1.0.min.js"></script>
        <script src="admin/demo/webpage/chain/js/jquery.sparkline.min.js"></script>

        <script src="admin/demo/webpage/chain/js/custom.js"></script>
        <script src="admin/demo/webpage/chain/js/charts.js"></script>

    </body>

    </html>

<?php

}
?>