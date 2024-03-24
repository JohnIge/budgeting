<?php
session_start();

include_once('incl/config.php');


$name = $_SESSION['name'];



if (isset($_POST['send'])) {
	
	$content = trim($_POST['content']);
	
	
$querye = "INSERT INTO chat VALUES ('', '$content','$name', 'Student')";
$result = mysqli_query($dbc, $querye);



}


if (isset($_POST['staff'])) {
	
	
	$content = trim($_POST['content']);
	
	
$querye = "INSERT INTO message VALUES ('', '$content','$name', 'Staff')";
$result = mysqli_query($dbc, $querye);


	


}

if (isset($_POST['student'])) {
	
	
	$content = trim($_POST['content']);
	
	
$querye = "INSERT INTO message VALUES ('', '$content','$name', 'Student')";
$result = mysqli_query($dbc, $querye);




}





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

<script type="text/JavaScript" language="javascript" src="js1/tim.js"> </script>




</head>
<body ONLOAD="window.setInterval('getServerText(2)',3000); window.setInterval('getServerTexts(2)',5000);">
<div id="logo">
	
</div>

<div id="menu">
	<ul>
		<li class="active"></li>
	</ul>
</div>
<div id="content">




	<div id="sidebar">
    
    
    
		<div id="login" class="boxed">
			<h2 class="title">Chats <?php  echo $name;   ?></h2>
            
            
            
			<div class="content" id="pulled">
            
				
                
                
                
                
			</div>
		</div>
		<div id="updates" class="boxed">
			<h2 class="title">Messages  <?php  echo $name;   ?></h2>
            
            
            <div class="content" id="pulled1">
            
				
                
                
                
                
			</div>
            
            
            
		</div>
	</div>
	<div id="main">
		<div id="welcome" class="post">
			<h2 class="title">Intranet Communication System</h2>
			<h3 class="date"><span class="month">Mar.</span> <span class="day">5</span><span class="year">, 2016</span></h3>
			<div class="story">
				<p id="chatt"><strong>Intranet Communication or Chatting System </strong>is an Online Information System that Will help  in the . </p>
                <form method="post" action="staff.php">
                
                
               <h2>Text Box</h2>
                <p><textarea name="content" cols="50" rows="10"></textarea> </p>
                
              <table>
                <tr><th>Chat</th><th></th><th>Message</th>
                <tr>
                <td><input type="submit" id="send" name="send"  value="Send Chat"/></td>
                <td></td>
                 <td><input type="submit" id="student" name="student" value="Message to Students"/></td>
                
                </tr>
                 <tr>
                <td></td>
                <td></td>
                 <td><input type="submit" id="staff" name="staff" value="Message to Staffs"/></td>
                
                </tr>
                
                
                
                
                </tr>
                </table>
                 <p>&nbsp;</p>
                </form>
                
                
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
