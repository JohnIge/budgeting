<?php
session_start();



include_once('incl/config.php');





if (isset($_POST['submit'])) {
	
	
	$sname = trim($_POST['sname']);
	$fname = trim($_POST['fname']);
	$oname = trim($_POST['oname']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$repassword = trim($_POST['repassword']);
	$regtime = time();
	//$label = trim($_POST['label']);
	//$reciept = trim($_POST['reciept']);
	//$name = trim($_POST['name']);
	//$email = trim($_POST['email']);
	
	//$date = time();
	//$generatedtag = $date * 23;
	
	//$date = time();
	
	//echo $username;
	//echo $password;
	  
$query = "SELECT * FROM profile WHERE Surname ='$sname' AND Firstname ='$fname' AND Othernames ='$oname' AND Phone = '$phone' AND Email = '$email'";


$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	$numrows = mysqli_num_rows($result);

if($numrows <= 0){

//generate next application Number/Id

$queryy = "SELECT Sn FROM profile ORDER BY Sn DESC LIMIT 1";
$resultt = mysqli_query($dbc, $queryy);
	$row = mysqli_fetch_array($resultt);
	$lastId = $row['Sn'];
	$nextId = $lastId + 1;
echo $nextId;

$querye = "INSERT INTO profile VALUES (0,'$nextId', '$sname', '$fname', '$oname', '$phone', '$email', '$username', '$password', 'New', '$regtime')";
$result = mysqli_query($dbc, $querye);
//$result = mysql_query($querye);
echo $querye;


//$queryee = "INSERT INTO users VALUES (0,'$name', '$username', '$password', 'Corper')";
//$resulte = mysqli_query($dbc, $queryee);


echo "Applicant Profile registration Successful with </br> Application ID $nextId</br></br></br></br></br>";



echo '<a href="login.php">Continue to Login</a></br>';




//header("location: admin.php");


}
else{
echo 'Existing Item  <a href="admin.php">Continue to Admin Panel</a>';
//header("location: index.php");

}

}
else{


?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BABCOCK UNIVERSITY ECONOMIC GROWTH PREDICTION SYSTEM</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

    <nav class="sidenav">
        <div class="container flex column-start">
            <div class="logo"><img src="assets/images/logo.jpg" alt=""></div>

            <div class="nav-links">
                
                <a href="#" class="link active">
                    <img src="assets/images/dashboard-vector.png" alt="">
                    <span>dashboard</span>
                </a>
                
                <a href="#" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span>form</span>
                </a>

            </div>

            <div class="nav-end">
                
				<!--
                <a href="#" class="link">
                    <i class="fas fa-sign-out icon"></i>
                    <span>logout</span>
                </a>

				-->
				
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

                    <div class="top-links flex row-between-center">

                        <div class="icon">
                            <i class="fas fa-bell"></i>
                        </div>

                        <div class="user">
                            <div class="user-img"></div>
                            
                        </div>

                    </div>

                </div>
            </div>

            <section class="forms flex column-center-center">

			
			<!--
                <div class="controls">

                    <div class="tab">application payment</div>
                    <div class="tab active">personal information</div>
                    <div class="tab">academic information</div>

                </div>

-->
                <div class="form-personal">

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="second-form flex column-center-center">

                        <div class="form-heading">profile information</div>

                        <div class="flex row-start wrap">

                            <div class="block">
                                <span>first name</span>
                                <input type="text" name="fname">
                            </div>
                            
                            <div class="block">
                                <span>surname</span>
                                <input type="text" name="sname">
                            </div>
                            
                            <div class="block">
                                <span>other names</span>
                                <input type="text" name="oname">
                            </div>

                            
                            <div class="block">
                                <span>email address</span>
                                <input type="email" name="email">
                            </div>
                            
                           
                            <div class="block">
                                <span>phone number</span>
                                <input type="text" name="phone">
                            </div>
                            
                          
                            
                           
                            
                       

                       
					   
					    
                            <div class="block">
                                <span>Username</span>
                                <input type="text" name="username">
                            </div>
                            
                           
                            <div class="block">
                                <span>password</span>
                                <input type="password" name="password">
                            </div>
                            
                          
                            
                            <div class="block">
                                <span>Password again</span>
                                <input type="password" name="repassword">
                            </div>
                            
                        </div>
					   
					   
					   

                        <div class="submit">
                            <input type="submit" name="submit" value="Register">
                        </div>

                    </form>

                </div>

            </section>

            

        </div>
    </div>
    
</body>
</html>


<?php

}
?>
