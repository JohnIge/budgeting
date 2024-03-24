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






<!DOCTYPE html>

<html lang="english">
  <head>
    <title>exported project</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <style>
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}
    </style>
    <style>
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./desktop12117128.css" rel="stylesheet" />

      <div class="desktop12117128-container">
	  
	  
	  
	  
	  
        <div class="desktop12117128-desktop12117128">
          <img
            alt="Rectangle27117129"
            src="public/playground_assets/rectangle27117129-9jyf.svg"
            class="desktop12117128-svg"
          />
          <img
            src="public/playground_assets/rectangle28117131-wxv4-200h.png"
            alt="Rectangle28117131"
            class="desktop12117128-image"
          />
          <img
            src="public/playground_assets/rectangle29117132-3ub-200h.png"
            alt="Rectangle29117132"
            class="desktop12117128-image1"
          />
         
         
		  
	  
	  
	  
	    <div >
                                <span>first name</span>
                                <input type="text" name="fname">
                            </div>
                            
                         
                           
                            <div >
                                <span>phone number</span>
                                <input type="text" name="phone">
                            </div>
                            
                          
                            
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
		  
		  
		  
		  
          <div class="desktop12117128-group3117137">
            <span class="desktop12117128-text">
              <span class="desktop12117128-text01">Register</span>
            </span>
          </div>
          <div class="desktop12117128-group4117142">
            <img
              alt="Ellipse5117143"
              src="public/playground_assets/ellipse5117143-q4ro.svg"
              class="desktop12117128-svg1"
            />
            <img
              alt="Ellipse6117144"
              src="public/playground_assets/ellipse6117144-uflv.svg"
              class="desktop12117128-svg2"
            />
          </div>
          <img
            src="public/playground_assets/babcockimaheblack1117145-vds-300h.png"
            alt="Babcockimaheblack1117145"
            class="desktop12117128-image4"
          />
          <span class="desktop12117128-text02">
            <span class="desktop12117128-text03">
              <span>Experience</span>
              <br />
              <span>Better</span>
            </span>
            <span class="desktop12117128-text07">Learning</span>
          </span>
          <img
            src="public/playground_assets/rectangle33117147-ji5o-300w.png"
            alt="Rectangle33117147"
            class="desktop12117128-image5"
          />
          <span class="desktop12117128-text08">
            <span class="desktop12117128-text09">Already have an account?</span>
          </span>
          <div class="desktop12117128-group5117149">
            <span class="desktop12117128-text10">
              <span class="desktop12117128-text11">Login</span>
            </span>
          </div>
          <span class="desktop12117128-text12">
            <span class="desktop12117128-text13">Login to continue</span>
          </span>
		  
		  
		  
		  
        
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
        </div>
      </div>
    </div>
  </body>
</html>
<?php
}
?>

