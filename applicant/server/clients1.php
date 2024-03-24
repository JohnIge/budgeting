<?php

if (isset($_GET['optss'])) {
$optss = $_GET['optss'];

$areas = '';


$dbc = mysqli_connect('localhost', 'root', '', 'server')
or die('Error connecting to MySQL server.');
$query = "SELECT * FROM message WHERE Role='$optss' ORDER BY MessageId DESC LIMIT 5";
$result = mysqli_query($dbc, $query);
$row = mysqli_fetch_array($result);


$onemessage= '';
$onechat = '';
$allchat = '';

 do 
{
  
 $onemessage = $row['Message'];
 $onechat =  $onemessage . '|'. $row['Sender'];  
$allchat .= $onechat . '~';
 
 
} while ($row = mysqli_fetch_array($result));

$allchat = substr($allchat, 0,((strlen($allchat)) -1));

echo $allchat;

mysqli_free_result ($result);
mysqli_close($dbc);



}


?>




