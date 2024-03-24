<?php
session_start();


//include_once('numbers/validate05.inc');
include_once('incl/config.php');
/*
include_once('../numbers/validate05.inc');

include_once('../'. decryptpass('qr3|xq2lhq********************'));
*/




if (isset($_POST['submit'])) {
	
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	
	
	  
$query = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";
//$result = mysql_query($query);
//$row = mysql_fetch_array($result);
//$numrows = mysql_num_rows($result);

$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	$numrows = mysqli_num_rows($result);
	
	
//$name = $row['Name'];	






	
	//echo $query;
	//echo  'Name is : ' .$name;
	
	
	if ($numrows > 0 ) {

	$name = $row['Name'];
	$role = $row['Role'];
	

	
	
	//$name = 'akins';
	//$role = 'inter';
	
	
	
	
	
	
	
	$_SESSION['who'] = $name;
	$_SESSION['role'] = $role;
	
	
	if($role =='Admin'){
		
	
	
	header("location: admin.php");
	
	}
	elseif($role =='Employer'){
		
	
	
	header("location: employers/admin.php");
	
	} 
	
	else{
		
		header("location: corpers/admin.php");
	}
	
	
	
	
	
	}
	else {
		
	echo 'Wrong Entry <A href="index.php">Try Again</a>';
	exit;
		
		
		
	}
	
	
	
}
else {


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission System</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

    <nav class="sidenav">
        <div class="container flex column-start">
            <div class="logo">   </div>

            <div class="nav-links">
                
                <a href="#" class="link active">
                    <img src="assets/images/dashboard-vector.png" alt="">
                    <span>dashboard</span>
                </a>
                
                <a href="#" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span>ADMISSION APPLICATION SYSTEM</span>
                </a>

            </div>

            <div class="nav-end">
                
              
            </div>


        </div>
    </nav>

    <div class="truebody">
        <div class="container">

            <div class="topnav">
                <div class="container flex row-between-center">

                    <form action="" method="post">
                        <input type="search" name="" id="" class="top-search" placeholder="search...">
                    </form>

                    <div class="top-links flex row-between-center">

                        <div class="icon">
                            <i class="fas fa-bell"></i>
                        </div>

                        <div class="user">
                            
                        </div>

                    </div>

                </div>
            </div>


            <section class="forms flex column-center-center">

               


                <div class="form-pay flex column-center-center">

                    <div class="form-heading">Admin Login</div>
                    

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="first-form">
                        <div class="pad">Login </div>

                        <div class="block">
                            <span>Username</span>
                            <input type="text" placeholder="Username" name="username">
                        </div>

                        <div class="group flex row-between-center">

                            <div class="block">
                                <span>Password</span>
                                <input type="password" placeholder="Password" name="password">
                            </div>

                            
                        </div>

                        <input type="submit" name="submit" value="Login">

                        <p class="sub-emphasis">
                           <a href="register.php">New Applicant Register</a>
                            <br><br>
                           <a href="login.php"> Applicant Login</a>
                        </p>

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

