<?php
session_start();

include_once('incl/config.php');

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABB - Admin Dashboard</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>

    <nav class="sidenav">
        <div class="container flex column-start">
            <div class="logo"><img src="#" alt=""></div>
            <div class="nav-links">

                <a href="#" class="link active">
                    <img src="assets/images/dashboard-vector.png" alt="">
                    <span>dashboard</span>
                </a>

                <a href="../user/regdhead.php" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span>Add New Departmental Head</span>
                </a>

                <a href="../user/regman.php" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span>Add New Manager</span>
                </a>

                <a href="#" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span> Delete Departmental Head</span>
                </a>

                <a href="#" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span> Delete Manager</span>
                </a>

                <a href="#" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span>Export Data</span>
                </a>
            </div>

            <div class="nav-end">
                <a href="index.html" class="link">
                    <i class="fas fa-sign-out icon"></i>
                    <span>logout</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="truebody">
        <div class="container">
            <div class="topnav">
                <div class="container flex row-between-center">
                    <form action="" method="get">
                        <input type="search" name="" id="" class="top-search" placeholder="search...">
                    </form>

                </div>
            </div>

            <section class="forms flex column-center-center">
                <div class="form-personal">
                    <div class="panel-body">
                        <h1>ADMIN DASHBOARD</h1>
                        <?php
                        ?>


                        <h3>Depatmental Heads</h3>

                        <table class="table table-default mb30 table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Fullname</th>
                                    <th>Department</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $query = "SELECT * FROM users";

                                $result = mysqli_query($dbc, $query);
                                $row = mysqli_fetch_array($result);
                                $numrows = mysqli_num_rows($result);

                                $num = 1;
                                do {
                                ?>
                                    <tr>
                                        <td><?php echo $row['Name'];  ?></td>
                                        <td><?php echo $row['Username'];  ?></td>
                                    </tr>

                                <?php

                                } while ($row = mysqli_fetch_array($result));


                                ?>


                            </tbody>


                        </table>














                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
<?php
?>