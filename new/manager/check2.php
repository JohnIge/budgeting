<?php
session_start();

include_once('incl/config.php');

if (isset($_POST['submit'])) {

    //$bname = trim($_POST['bname']);
    $tag = trim($_POST['tag']);

    /*step to generate the budget
	
	list departments
	
	list cost drivers of departments
	list cost pools of every cost drivers
	get the units assigned and unit cost
	cost on the cost pool = units ** cost
	add up cost pool to get cost driver
	add up cost driver to get department cost
	add department up to get budget cost
	
	*/

    //list department       

?>
    <h1>COMPREHENSIVE BUDGET REPORT</h1>
    <hr></br>


    <?php

    $query = "SELECT * FROM department";


    $result = mysqli_query($dbc, $query);
    $row = mysqli_fetch_array($result);

    $totalbudgetcost = 0;


    do {
        //list cost drivers of departments
        $department = $row['Departmentname'];

    ?>

        <h2>Department:<?php echo $department;   ?></h2></br>


        <?php



        $query2 = "SELECT * FROM costdriver WHERE Department='$department'";

        $result2 = mysqli_query($dbc, $query2);
        $row2 = mysqli_fetch_array($result2);
        $totaldepartmentalbudget = 0;

        do {
            $costdriver =  $row2['Drivername'];
            //list cost pool of cost drivers
        ?>

            <h3>Driver:<?php echo $costdriver;   ?></h3></br>


            <?php

            // $query3 = "SELECT * FROM costpool WHERE Departmentname='$department' AND Driver='$costdriver'";

            $query3 = "SELECT * FROM costpooltrans WHERE Department='$department' AND Driver='$costdriver'";

            // echo $query3.'</br>';


            $result3 = mysqli_query($dbc, $query3);
            $row3 = mysqli_fetch_array($result3);
            $totaldriverbudget = 0;

            do {
                $costpool =  $row3['Poolname'];

                $units =  $row3['Units'];



                $query4 = "SELECT * FROM costpool WHERE Poolname='$costpool'";

                //$query4 = "SELECT * FROM costpooltrans WHERE Departmentname='$department' AND Driver='$costdriver' AND Poolname='$costpool'";

                $result4 = mysqli_query($dbc, $query4);
                $row4 = mysqli_fetch_array($result4);

                $unitcost = $row4['Unitcost'];

                $totalpoolcost =  $unitcost * $units;
                $totaldriverbudget = $totaldriverbudget + $totalpoolcost;

                $totaldepartmentalbudget  = $totaldepartmentalbudget + $totalpoolcost;

                $totalbudgetcost = $totalbudgetcost + $totalpoolcost;

            ?>

                <h4>Costpool:<i><?php echo $costpool;   ?></i>Unit cost:<i><?php echo  $unitcost;   ?></i>Number Of Units:<i><?php echo  $units;   ?></i>Total Pool cost:<i><?php echo  $totalpoolcost;   ?></i></h4>


            <?php


                $time = time();


                $querye = "INSERT INTO budgetitems VALUES (0,'$costpool', '$costdriver', '$units', '$department','$unitcost', '$totalpoolcost', '$tag', '$time')";
                $result = mysqli_query($dbc, $querye);

                //} while ($row4 = mysqli_fetch_array($result4));

            } while ($row3 = mysqli_fetch_array($result3));

            ?>

            <h3>Total Driver Cost:<i><?php echo $totaldriverbudget;   ?></i></h3>







            <hr>



        <?php


        } while ($row2 = mysqli_fetch_array($result2));
        ?>
        <h2>Total Department Cost:<i><?php echo  $totaldepartmentalbudget;   ?></i></h2>




        <hr>
        <hr>



    <?php

    } while ($row = mysqli_fetch_array($result));


    ?>
    <h2>Total Budget Cost:<i><?php echo  $totalbudgetcost;   ?></i></h2>



<?php
} else {
?>


    <!DOCTYPE html>ABB - Report Page</title>

    <link href="admin/demo/webpage/chain/css/style.default.css" rel="stylesheet">
    <link href="admin/demo/webpage/chain/css/morris.css" rel="stylesheet">
    <link href="admin/demo/webpage/chain/css/select2.css" rel="stylesheet" />
    <link href="admin/demo/webpage/chain/css/morris.css" rel="stylesheet">
    <link href="admin/demo/webpage/chain/css/tunjicss.css" rel="stylesheet">
    </head>

    <body>

        <header>
            <div class="headerwrapper">
                <a href="index-2.html" class="logo">
                    <img src="admin/demo/webpage/chain/images/babcock.png" alt="" />
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
                        <li class="active"><a href="superadmin.html"><i class="fa fa-user"></i> <span>Membership</span></a>

                        <li class=""><a href="setting.html"><i class="fa fa-wrench"></i> <span>Settings</span></a>
                        <li class=""><a href="../phishing/"><i class="fa fa-wrench"></i><span>Logout</span></a></li>

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
                                </ul>
                                <h4>Budgeting System</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->


                    <div class="contentpanel">
                        <div class="panel panel-babcock">
                            <div class="panel-heading">Budgeting System


                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" action="check2.php" method="post">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label"> Budget Report Tag</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="name" placeholder="Statement" name="tag">
                                                </div>
                                            </div>







                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="form-group col-md-6">
                                                    <button class="btn-sm btn btn-success" name="submit"><i class="fa fa-check"></i> Check</button>
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