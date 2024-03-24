<?php
session_start();



include_once('incl/config.php');

$sname = $_SESSION['sname'];
$fname = $_SESSION['fname'];
$oname = $_SESSION['oname'];
$appid = $_SESSION['appid'];




if (isset($_POST['submit'])) {
	
	
    $school = trim($_POST['school']);
	$exam = trim($_POST['exam']);
	$examdate = trim($_POST['examdate']);
	$examno = trim($_POST['examno']);
	$subj1 = trim($_POST['subj1']);
	$subj2 = trim($_POST['subj2']);
	$subj3 = trim($_POST['subj3']);
	$subj4 = trim($_POST['subj4']);
	$subj5 = trim($_POST['subj5']);
	$subj6 = trim($_POST['subj6']);
	$subj7 = trim($_POST['subj7']);
	$subj8 = trim($_POST['subj8']);
	$subj9 = trim($_POST['subj9']);
	$subj10 = trim($_POST['subj10']);
	$subj11 = trim($_POST['subj11']);
	
	$grade1 = trim($_POST['grade1']);
	$grade2 = trim($_POST['grade2']);
	$grade3 = trim($_POST['grade3']);
	$grade4 = trim($_POST['grade4']);
	$grade5 = trim($_POST['grade5']);
	$grade6 = trim($_POST['grade6']);
	$grade7 = trim($_POST['grade7']);
	$grade8 = trim($_POST['grade8']);
	$grade9 = trim($_POST['grade9']);
	$grade10 = trim($_POST['grade10']);
	$grade11 = trim($_POST['grade11']);
	
	
	$combine = trim($_POST['combine']);
	
	$secexam = trim($_POST['secexamcenter']);
	//$secexam = trim($_POST['secexam']);
	$secexamdate = trim($_POST['secexamdate']);
	$secexamno = trim($_POST['secexamno']);
	
	/*
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$repassword = trim($_POST['repassword']);
	*/
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
	  
$query = "SELECT * FROM qualification WHERE ApplicationId ='$appid' AND  Status='Registered'";


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

$querye = "INSERT INTO qualification VALUES (0,'$appid', '$school', '$exam', '$examdate', '$examno', '$subj1', '$grade1', '$subj2', '$grade2', '$subj3', '$grade3', '$subj4', '$grade4', '$subj5', '$grade5', '$subj6', '$grade6', '$subj7', '$grade7', '$subj8', '$grade8', '$subj9', '$grade9', '$combine', '$subj10', '$grade10', '$subj11', '$grade11', '$secexam', '$secexamno', '$secexamdate', 'Registered', '$regtime')";
$result = mysqli_query($dbc, $querye);
//$result = mysql_query($querye);
echo $querye;


//$queryee = "INSERT INTO users VALUES (0,'$name', '$username', '$password', 'Corper')";
//$resulte = mysqli_query($dbc, $queryee);


echo "Applicant Profile registration Successful with </br> Application ID $appid</br></br></br></br></br>";



echo '<a href="admin.php">Continue to home</a></br>';




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
                    <div class="tab active">academic information</div>
					 <div class="tab">Course of Study</div>
					  <div class="tab">Jamb Score</div>
					   <div class="tab">Picture Upload</div>

                </div>


                <div class="form-personal">

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="second-form flex column-center-center">

                        <div class="form-heading">Applicant Academic Information</div>

                        <div class="flex row-start wrap">

                            <div class="block">
                                <span>Secondary School Name</span>
                                <input type="text" name="school">
                            </div>
                            
                            
                            
                            <div class="block">
                                <span>Exam Name</span>
                                <input type="text" name="exam">
                            </div>
                            
                           
                            <div class="block">
                                <span>Exam Date</span>
                                <input type="text" name="examdate">
                           
                            </div>
                          
                             
                            <div class="block">
                                <span>Exam Number</span>
                                <input type="text" name="examno">
                           
                            </div>
							
							 
                            <div class="block">
                                <span>Subject 1</span>
                                <input type="text" name="subj1">
                           
                            </div>
							
							 
                            <div class="block">
                                <span>Subject 1 Grade</span>
                                <select name="grade1">
										<option>A</option>
										<option>B</option>
										<option>C</option>
										<option>D</option>
										<option>E</option>
										<option>F</option>
										</select>
                           
                            </div>
							
							
							  <div class="block">
                                <span>Subject 2</span>
                                <input type="text" name="subj2">
                           
                            </div>
							
							 
                            <div class="block">
                                <span>Subject 2 Grade</span>
                                <select name="grade2">
										<option>A</option>
										<option>B</option>
										<option>C</option>
										<option>D</option>
										<option>E</option>
										<option>F</option>
										</select>
                           
                            </div>
							
							
							  <div class="block">
                                <span>Subject 3</span>
                                <input type="text" name="subj3">
                           
                            </div>
							
							 
                            <div class="block">
                                <span>Subject 3 Grade</span>
                                <select name="grade3">
										<option>A</option>
										<option>B</option>
										<option>C</option>
										<option>D</option>
										<option>E</option>
										<option>F</option>
										</select>
                           
                            </div>
							
							
							  <div class="block">
                                <span>Subject 4</span>
                                <input type="text" name="subj4">
                           
                            </div>
							
							 
                            <div class="block">
                                <span>Subject 4 Grade</span>
                                <select name="grade4">
										<option>A</option>
										<option>B</option>
										<option>C</option>
										<option>D</option>
										<option>E</option>
										<option>F</option>
										</select>
                           
                            </div>
							
							
							  <div class="block">
                                <span>Subject 5</span>
                                <input type="text" name="subj5">
                           
                            </div>
							
							 
                            <div class="block">
                                <span>Subject 5 Grade</span>
                                <select name="grade5">
										<option>A</option>
										<option>B</option>
										<option>C</option>
										<option>D</option>
										<option>E</option>
										<option>F</option>
										</select>
                           
                            </div>
							
							
							  <div class="block">
                                <span>Subject 6</span>
                                <input type="text" name="subj6">
                           
                            </div>
							
							 
                            <div class="block">
                                <span>Subject 6 Grade</span>
                                <select name="grade6">
										<option>A</option>
										<option>B</option>
										<option>C</option>
										<option>D</option>
										<option>E</option>
										<option>F</option>
										</select>
                           
                            </div>
							
							
							
							  <div class="block">
                                <span>Subject 7</span>
                                <input type="text" name="subj7">
                           
                            </div>
							
							 
                            <div class="block">
                                <span>Subject 7 Grade</span>
                                <select name="grade7">
										<option>A</option>
										<option>B</option>
										<option>C</option>
										<option>D</option>
										<option>E</option>
										<option>F</option>
										</select>
                           
                            </div>
							
							
							  <div class="block">
                                <span>Subject 8</span>
                                <input type="text" name="subj8">
                           
                            </div>
							
							 
                            <div class="block">
                                <span>Subject 8 Grade</span>
                                <select name="grade8">
										<option>A</option>
										<option>B</option>
										<option>C</option>
										<option>D</option>
										<option>E</option>
										<option>F</option>
										</select>
                           
                            </div>
							
							
							
							
							  <div class="block">
                                <span>Subject 9</span>
                                <input type="text" name="subj9">
                           
                            </div>
							
							 
                            <div class="block">
                                <span>Subject 9 Grade</span>
                                <select name="grade9">
										<option>A</option>
										<option>B</option>
										<option>C</option>
										<option>D</option>
										<option>E</option>
										<option>F</option>
										</select>
                           
                            </div>
							
							
							 
							
                           
                            
                        </div>
						
						
						
						<div class="flex row-start wrap">

                            <div class="block">
                                <span>Second Sitting</span>
                                <input type="check" name="combine">
                            </div>
                            
							
							<div class="block">
                                <span>Exam Center</span>
                                <input type="text" name="secexamcenter">
                            </div>
                            
                            
                            
                            
                           
                            <div class="block">
                                <span>Exam Date</span>
                                <input type="text" name="secexamdate">
                           
                            </div>
                          
                             
                            <div class="block">
                                <span>Exam Number</span>
                                <input type="text" name="secexamno">
                           
                            </div>
							
							 
                            <div class="block">
                                <span>Subject 1</span>
                                <input type="text" name="subj10">
                           
                            </div>
							
							 
                            <div class="block">
                                <span>Subject 1 Grade</span>
                                <select name="grade10">
										<option>A</option>
										<option>B</option>
										<option>C</option>
										<option>D</option>
										<option>E</option>
										<option>F</option>
										</select>
                           
                            </div>
							
							
							  <div class="block">
                                <span>Subject 2</span>
                                <input type="text" name="subj11">
                           
                            </div>
							
							 
                            <div class="block">
                                <span>Subject 2 Grade</span>
                                <select name="grade11">
										<option>A</option>
										<option>B</option>
										<option>C</option>
										<option>D</option>
										<option>E</option>
										<option>F</option>
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
