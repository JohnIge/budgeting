<?php
session_start();

$base = $_SERVER['DOCUMENT_ROOT'];

include_once('incl/config.php');

$sname = $_SESSION['sname'];
$fname = $_SESSION['fname'];
$oname = $_SESSION['oname'];
$appid = $_SESSION['appid'];




if (isset($_POST['submit'])) {
	
	
	$interview = trim($_POST['interview']);
	//$fname = trim($_POST['fname']);
	//$oname = trim($_POST['oname']);
	/*
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$repassword = trim($_POST['repassword']);
	*/
	//$picname = $_FILES['pic']['name'];
//$filesize = $_FILES['pic']['size'];
//$filetemppath = $_FILES['pic']['tmp_name'];

//$picname = $appid.'.jpg';
//$finalfilename = $base .'/application2/applicant/Newfolder/' . $picname;
//$finalfilename = 'img/' . $picname;
//$ffinalfilename = $base . 'Newfolder/' . $finalfilename;
//$ffinalfilename = $base . '/'. $finalfilename;
//move_uploaded_file($_FILES['pic']['tmp_name'], $ffinalfilename);
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
$query = "SELECT * FROM interview WHERE ApplicationId ='$appid' AND  Status='Registered'";
	  
//$query = "SELECT * FROM profile WHERE Surname ='$sname' AND Firstname ='$fname' AND Othernames ='$oname' AND Phone = '$phone' AND Email = '$email'";


$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	$numrows = mysqli_num_rows($result);

if($numrows <= 0){

//generate next application Number/Id
/*
$queryy = "SELECT ApplicationId FROM profile ORDER DESC LIMIT 1";
$resultt = mysqli_query($dbc, $queryy);
	$row = mysqli_fetch_array($resultt);
	$lastId = $row['ApplicationId'];
	$nextId = $lastId + 1;
*/

$querye = "INSERT INTO interview VALUES (0,'$appid', '$interview', 'Registered', '$regtime')";
$result = mysqli_query($dbc, $querye);
//$result = mysql_query($querye);
//echo $querye;


//$queryee = "INSERT INTO users VALUES (0,'$name', '$username', '$password', 'Corper')";
//$resulte = mysqli_query($dbc, $queryee);


echo "Interview Date selected successfully </br> Application ID $appid</br></br></br></br></br>";



echo '<a href="admin.php">Continue to Home</a></br>';




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
    <title>ADMISSION APPLICATION SYSTEM</title>

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
				
				 <a href="payment.php" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span>Payment</span>
                </a>


				<a href="biodata.php" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span>Biodata Information</span>
                </a>
				
				<a href="qualification.php" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span>Academic Information</span>
                </a>

				<a href="jamb.php" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span>JAMB/UTME Score</span>
                </a>

				
				

				<a href="course.php" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span>Course of Study</span>
                </a>

				<a href="picture.php" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span>Picture Upload</span>
                </a>

				<a href="report.php" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span>Form Printing</span>
                </a>

				
				<a href="chat.php" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span>Chat with a Staff</span>
                </a>
				<a href="change.php" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span>Change Password</span>
                </a>

				<a href="countdown.php" class="link">
                    <img src="assets/images/form-vector.png" alt="">
                    <span>Interview Date</span>
                </a>

				

				
				
            </div>

            <div class="nav-end">
                
			
                <a href="../" class="link">
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

			
			
                <div class="controls">

                    <div class="tab">application payment</div>
                    <div class="tab">BIodata information</div>
                    <div class="tab">academic information</div>
					 <div class="tab">Course of Study</div>
					  <div class="tab">Jamb Score</div>
					   <div class="tab active">Picture Upload</div>

                </div>


                <div class="form-personal">

                    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="second-form flex column-center-center">

                        <div class="form-heading">Applicant Interview Date</div>

                        <div class="flex row-start wrap">

                           
                           
                            <div class="block">
                                <span>Interview Date</span>
                               <select name="interview">
										<option>21-March-2022</option>
										<option>28-March-2022</option>
										<option>4-April-2022</option>
										<option>11-April-2022</option>
										<option>18-April-2022</option>
										</select>
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
