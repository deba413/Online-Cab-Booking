<?php

session_start();
$uid = $_SESSION['uid'];

$con=mysqli_connect("localhost","root","","cab");

// Check connection
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="update driver set d_address='" . $_GET['d_address'] . "', dmobile='" . $_GET['dmobile'] . "' where  d_mail='" . $uid . "'";  
if(mysqli_query($con,$sql)==false)
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Successfully Updated";
mysqli_close($con);
?> 
<br>
<br>
click <a href="driver_logout.php">Logout</a>