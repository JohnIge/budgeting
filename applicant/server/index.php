<?php
session_start();


include_once('incl/config.php');




if (isset($_POST['submit'])) {
	
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	
	
	
echo 'There';
	
	
	$query = "SELECT * FROM users WHERE Username= '$username' AND Password = '$password'";
	$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	
	$numrows = mysqli_num_rows($result);
	
	
	if ($numrows > 0 ) 
	{
		
		$group = $row['Role'];
		$name = $row['Name'];
		//$phone = $row['Phone'];
		//$header = $row['Smsheader'];
		
		//$_SESSION['patientid'] = $patientid;
		//$_SESSION['accesscode'] =  $accesscode;
		$_SESSION['name'] =  $name;
		$_SESSION['group'] =  $group;
		
		if ($group == 'Staff'){
		
		
			
			header("location: staff.php");
			
			}
			else {
			
			
			header("location: student.php");
			
			
			}
			
			
				
			
	}
	else 
	{	
	echo 'Wrong Entry <A href="index.php">Try Again</a>';
	exit;	
	}	


}
else 
{

?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Chating System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="logo">
	
</div>

<div id="menu">
	<ul>
		<li class="active"><a href="#" title="">Homepage</a></li>
		<li><a href="#" title="">About Us</a></li>
		
		<li><a href="#" title="">Support</a></li>
	</ul>
</div>
<div id="content">
	<div id="sidebar">
		<div id="login" class="boxed">
			<h2 class="title">User Account</h2>
			<div class="content">
				<form id="form1" method="post" action="index.php">
					<fieldset>
					<legend>Sign-In</legend>
					<label for="inputtext1">Username:</label>
					<input id="username" type="text" name="username" value="" />
					<label for="inputtext2">Password:</label>
					<input id="password" type="password" name="password" value="" />
                    
                    <!--
                    <label for="inputtext3">Access Code:</label>
					<input id="inputtext2" type="text" name="access" value="" />
                    -->
					<input id="inputsubmit1" type="submit" name="submit" value="Sign In" />
					<p><a href="#">Forgot your password?</a></p>
					</fieldset>
				</form>
			</div>
		</div>
		<div id="updates" class="boxed">
			<h2 class="title">Recent Updates</h2>
		</div>
	</div>
	<div id="main">
		<div id="welcome" class="post">
			<h2 class="title">Intranet Communication System</h2>
			<h3 class="date"><span class="month">Mar.</span> <span class="day">5</span><span class="year">, 2015</span></h3>
			<div class="story">
				<p><strong>Intranet Communication or Chatting System </strong>is an Online Information System that Will help  in the . </p>
			</div>
		</div>
	</div>
	<div id="extra" style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
	<p id="legal">Copyright &copy; 2015 Moses Ayanlowo</p>
</div>
</body>
</html>
<?php

}


?>