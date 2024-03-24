<?php
session_start();


//include_once('numbers/validate05.inc');
include_once('incl/config.php');
$sname = $_SESSION['sname'];
$fname = $_SESSION['fname'];
$oname = $_SESSION['oname'];
$appid = $_SESSION['appid'];


//$role = $_SESSION['role'];
	//$_SESSION['role'] = $role;
	


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

				
				<a href="server/student.php" class="link">
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

						<?php
						$picname = $appid.'.jpg';
                        $finalfilename = 'Newfolder/' . $picname;
						?>
						
                        <div class="user">
                            <div class="user-img"><img src="<?php echo $finalfilename  ?>" alt="" ></div>
                            <div class="username">
                                <div class="name"><?php echo $sname.' '.$fname.' '. $oname;?></div>
                                <div class="title">applicantion No: <?php echo $appid;?> </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <section class="forms flex column-center-center">

			
			
                <div class="controls">
                   <div class="tab active">Home</div>
                    <div class="tab">application payment</div>
                    <div class="tab">BIodata information</div>
                    <div class="tab">academic information</div>
					 <div class="tab">Course of Study</div>
					  <div class="tab">Jamb Score</div>
					   <div class="tab active">Picture Upload</div>

                </div>


                <div class="form-personal">

                    
					
					 <div class="panel-body">
					
					
					<h1>APPLICATION REPORT</h1>
					
					
					<?php
					
					
						  
$query = "SELECT * FROM profile WHERE ApplicationId = '$appid'";


$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	$numrows = mysqli_num_rows($result);
			
if ($numrows > 0 ) {


echo '<h2> Profile Information</h2><br>';

$surname = $row['Surname'];
$firstname = $row['FirstName'];
$othername = $row['OtherNames'];
$phone = $row['Phone'];
$email = $row['Email'];

echo 'Surname: <b>'.$surname.'</b> First Name: <b>'.$firstname.'</b> Other Names: <b>'.$firstname .'</b><br>';

echo 'Phone: <b>'.$phone.'</b> Email: <b>'.$email.'</b> <br>';


//$course= $row['Course'];
			//echo"Admitted For $course";
					
			}
else{
$biodatastat ='Not Completed';
$paymentstat ='Not Completed';
$qualstat ='Not Completed';
$jambstat ='Not Completed';
$coursestat ='Not Completed';
$picstat ='Not Completed';






}












$query0 = "SELECT * FROM biodata WHERE ApplicationId = '$appid'";
$result0 = mysqli_query($dbc, $query0);
	$row0 = mysqli_fetch_array($result0);
	//$numrows = mysqli_num_rows($result);
	$numrows0 = mysqli_num_rows($result0);
	
	
	
	
	
	
	if ($numrows0 > 0 ) {


echo '<h2> Biodata Information</h2><br>';

$dob = $row0['Dob'];
$gender = $row0['Gender'];
$marital = $row0['MaritalStatus'];
$town = $row0['Town'];
$lga = $row0['Lga'];


$state = $row0['State'];
$nok = $row0['Nok'];
$nokphone = $row0['Nokphone'];
$fathername = $row0['Fathername'];
$mothername= $row0['Mothername'];

$guardian = $row0['Guardian'];
$parentphone = $row0['Parentphone'];
$parentemail = $row0['Parentemail'];
$address = $row0['Homeaddress'];
//$lga = $row['Lga'];

echo 'Date of Birth: <b>'.$dob.'</b> Gender: <b>'.$gender.'</b> Marital Status: <b>'.$marital .'</b><br>';
echo 'Town: <b>'.$town.'</b> Local Government Area: <b>'.$lga.'</b> State: <b>'.$state.'</b> <br>';
echo 'Next of Kin: <b>'.$nok.'</b> Phone: <b>'.$nokphone.'</b> Guardian Name: <b>'.$guardian .'</b><br>';
echo 'Father Name: <b>'.$fathername.'</b> Mother Name: <b>'.$mothername.'</b> <br>';
echo 'Parent Phone: <b>'.$parentphone.'</b> Parent Email: <b>'.$parentemail.'</b> Address : <b>'.$address.'</b> <br>';

//$course= $row['Course'];
			//echo"Admitted For $course";
					
			}
else{
$biodatastat ='Not Completed';
$paymentstat ='Not Completed';
$qualstat ='Not Completed';
$jambstat ='Not Completed';
$coursestat ='Not Completed';
$picstat ='Not Completed';






}


	
	

$query1 = "SELECT * FROM payment WHERE ApplicationId = '$appid'";
$result1 = mysqli_query($dbc, $query1);
	$row1 = mysqli_fetch_array($result1);
	//$numrows = mysqli_num_rows($result);
	$numrows1 = mysqli_num_rows($result1);
	
	
	
	
	
	
	if ($numrows1 > 0 ) {


echo '<h2> Payment Information</h2><br>';

$amount = $row1['Amountpaid'];
$account = $row1['Accountpaidto'];
$bank = $row1['Bank'];
$mode = $row1['Modeofpayment'];
$payday = $row1['Paydate'];


$transid = $row1['TransactionId'];

//$lga = $row['Lga'];

echo 'Account Name/No Paid to: <b>'.$account.'</b> AMount Paid: <b>'.$amount.'</b> Bank: <b>'.$bank .'</b><br>';
echo 'Mode of Payment: <b>'.$mode.'</b> Date of Payment: <b>'.$payday.'</b> Transaction Narration/Id: <b>'.$transid.'</b> <br>';


//$course= $row['Course'];
			//echo"Admitted For $course";
					
			}
else{
$biodatastat ='Not Completed';
$paymentstat ='Not Completed';
$qualstat ='Not Completed';
$jambstat ='Not Completed';
$coursestat ='Not Completed';
$picstat ='Not Completed';






}
	
	
	
	
	
	
		

$query2 = "SELECT * FROM qualification WHERE ApplicationId = '$appid'";
$result2 = mysqli_query($dbc, $query2);
	$row2 = mysqli_fetch_array($result2);
	//$numrows = mysqli_num_rows($result);
	$numrows2 = mysqli_num_rows($result2);
	
	
	
	
	
	
	if ($numrows2 > 0 ) {


echo '<h2> Academic Information</h2><br>';

$school = $row2['school'];
$exam = $row2['Exam'];
$examdate = $row2['Examdate'];
$examno = $row2['Examno'];

$subj1 = $row2['Subj1'];
$score1 = $row2['Score1'];


$subj2 = $row2['Subj2'];
$score2 = $row2['Score2'];

$subj3 = $row2['Subj3'];
$score3 = $row2['Score3'];

$subj4 = $row2['Subj4'];
$score4 = $row2['Score4'];

$subj5 = $row2['Subj5'];
$score5 = $row2['Score5'];

$subj6 = $row2['Subj6'];
$score6 = $row2['Score6'];

$subj7 = $row2['Subj7'];
$score7 = $row2['Score7'];

$subj8 = $row2['Subj8'];
$score8 = $row2['Score8'];

$subj9 = $row2['Subj9'];
$score9 = $row2['Score9'];

$subj10 = $row2['Subj10'];
$score10 = $row2['Score10'];

$subj11 = $row2['Subj11'];
$score11 = $row2['Score11'];


//$school = $row2['school'];
$secexamcenter = $row2['Secexamcenter'];
$secexamdate = $row2['Secexamdate'];
$secexamno = $row2['Secexamno'];
$combine = $row2['Combine'];


echo 'Secondary School: <b>'.$school.'</b> O/Level Exam: <b>'.$exam.'</b> Exam Date: <b>'.$examdate .'</b> Exam No: <b>'.$examno .'</b><br>';
echo $subj1.'</b> : <b>'.$score1.'</b> '.$subj2.':</b>  '.$score2.'</b> '.$subj3.':</b>  '.$score3.'</b><br>';
echo $subj4.'</b> : <b>'.$score4.'</b> '.$subj5.':</b>  '.$score5.'</b> '.$subj6.':</b>  '.$score6.'</b><br>';
echo $subj7.'</b> : <b>'.$score7.'</b> '.$subj8.':</b>  '.$score8.'</b> '.$subj9.':</b>  '.$score9.'</b><br><br>';

echo '<h2> Second Sitting</h2><br>';

echo 'Center Name: <b>'.$secexamcenter.'</b> Exam Date: <b>'.$secexamdate.'</b> Exam No: <b>'.$secexamno .'</b><br>';
echo $subj10.'</b> : <b>'.$score10.'</b> '.$subj11.':</b>  '.$score11.'</b><br>';
//$course= $row['Course'];
			//echo"Admitted For $course";
					
			}
else{
$biodatastat ='Not Completed';
$paymentstat ='Not Completed';
$qualstat ='Not Completed';
$jambstat ='Not Completed';
$coursestat ='Not Completed';
$picstat ='Not Completed';






}
	
	
	
	
	
$query3 = "SELECT * FROM jamb WHERE ApplicationId = '$appid'";
$result3 = mysqli_query($dbc, $query3);
	$row3 = mysqli_fetch_array($result3);
	//$numrows = mysqli_num_rows($result);
	$numrows3 = mysqli_num_rows($result3);
	
	
	
	
	
	
	if ($numrows3 > 0 ) {


echo '<h2> JAMB/UTME Information</h2><br>';

//$school = $row2['school'];
//$exam = $row3['Exam'];
$examdateJ = $row3['Examdate'];
$examnoJ = $row3['Examno'];

$subj1J = $row3['Subj1'];
$score1J = $row3['Score1'];


$subj2J = $row3['Subj2'];
$score2J = $row3['Score2'];


$subj3J = $row3['Subj3'];
$score3J = $row3['Score3'];


$subj4J = $row3['Subj4'];
$score4J = $row3['Score4'];


$total = $row3['Totalscore'];
//$score1J = $row3['Score1'];


echo 'Exam Date: <b>'.$examdateJ .'</b> Exam No: <b>'.$examnoJ .'</b><br>';
echo $subj1J.': <b>'.$score1J.'</b> '.$subj2J.':</b>  '.$score2J.'</b><br>';
echo $subj3J.' : <b>'.$score3J.'</b> '.$subj4J.':</b>  '.$score4J.'</b><br>';
echo 'Total Score : <b>'.$total.'<br><br>';

//echo '<h2> Second Sitting</h2><br>';

//echo 'Center Name: <b>'.$secexamcenter.'</b> Exam Date: <b>'.$secexamdate.'</b> Exam No: <b>'.$secexamno .'</b><br>';
//echo $subj10.'</b> : <b>'.$score10.'</b> '.$subj11.':</b>  '.$score11.'</b><br>';
//$course= $row['Course'];
			//echo"Admitted For $course";
					
			}
else{
$biodatastat ='Not Completed';
$paymentstat ='Not Completed';
$qualstat ='Not Completed';
$jambstat ='Not Completed';
$coursestat ='Not Completed';
$picstat ='Not Completed';






}
	
	
	
	
	
		
	
$query4 = "SELECT * FROM course WHERE ApplicationId = '$appid'";
$result4 = mysqli_query($dbc, $query4);
	$row4 = mysqli_fetch_array($result4);
	//$numrows = mysqli_num_rows($result);
	$numrows4 = mysqli_num_rows($result4);
	
	
	
	
	
	
	if ($numrows4 > 0 ) {


echo '<h2> Course of Study Information</h2><br>';

//$school = $row2['school'];
//$exam = $row3['Exam'];
$choice1 = $row4['Choice1'];
$choice2 = $row4['Choice2'];




echo 'First Choice: <b>'.$choice1 .'</b> Second Choice: <b>'.$choice2.'</b><br>';
//echo $subj1J.': <b>'.$score1J.'</b> '.$subj2J.':</b>  '.$score2J.'</b><br>';
//echo $subj3J.' : <b>'.$score3J.'</b> '.$subj4J.':</b>  '.$score4J.'</b><br>';
//echo 'Total Score : <b>'.$total.'<br><br>';

//echo '<h2> Second Sitting</h2><br>';

//echo 'Center Name: <b>'.$secexamcenter.'</b> Exam Date: <b>'.$secexamdate.'</b> Exam No: <b>'.$secexamno .'</b><br>';
//echo $subj10.'</b> : <b>'.$score10.'</b> '.$subj11.':</b>  '.$score11.'</b><br>';
//$course= $row['Course'];
			//echo"Admitted For $course";
					
			}
else{
$biodatastat ='Not Completed';
$paymentstat ='Not Completed';
$qualstat ='Not Completed';
$jambstat ='Not Completed';
$coursestat ='Not Completed';
$picstat ='Not Completed';






}
	
	
	
	
	
	
			
	
$query5 = "SELECT * FROM interview WHERE ApplicationId = '$appid'";
$result5 = mysqli_query($dbc, $query5);
	$row5 = mysqli_fetch_array($result5);
	//$numrows = mysqli_num_rows($result);
	$numrows5 = mysqli_num_rows($result5);
	
	
	
	
	
	
	if ($numrows5 > 0 ) {


echo '<h2> Interview Date</h2><br>';

//$school = $row2['school'];
//$exam = $row3['Exam'];
$interview = $row5['Interviewdate'];
//$choice2 = $row4['Choice2'];




echo 'Interview Date: <b>'.$interview .'</b><br>';
//echo $subj1J.': <b>'.$score1J.'</b> '.$subj2J.':</b>  '.$score2J.'</b><br>';
//echo $subj3J.' : <b>'.$score3J.'</b> '.$subj4J.':</b>  '.$score4J.'</b><br>';
//echo 'Total Score : <b>'.$total.'<br><br>';

//echo '<h2> Second Sitting</h2><br>';

//echo 'Center Name: <b>'.$secexamcenter.'</b> Exam Date: <b>'.$secexamdate.'</b> Exam No: <b>'.$secexamno .'</b><br>';
//echo $subj10.'</b> : <b>'.$score10.'</b> '.$subj11.':</b>  '.$score11.'</b><br>';
//$course= $row['Course'];
			//echo"Admitted For $course";
					
			}
else{
$biodatastat ='Not Completed';
$paymentstat ='Not Completed';
$qualstat ='Not Completed';
$jambstat ='Not Completed';
$coursestat ='Not Completed';
$picstat ='Not Completed';






}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//$picstat = $row5['Status'];	
  
  
  
  
//}			
					?>
					
					
					
					
					 
				
					

						
                    </div>

					
					
					
                </div>

            </section>

            

        </div>
    </div>
    
</body>
</html>


<?php

//}
?>
