<?php


$con=mysqli_connect("localhost","root","","cab");

// Check connection
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
session_start();
$uid = $_SESSION['uid'];
  $tmobile=$_GET['tmobile'];
  $taddress=$_GET['taddress'];

$sql="UPDATE traveler SET taddress='" .$taddress. "', tmobile='" . $tmobile . "' where  tmail='" .$uid. "'";  
$result=mysqli_query($con,$sql);
if($result)
  {
    echo "Successfully Updated";
    // echo"click <a href='travellar_logout.php'>Logout</a>";
    // mysqli_close($con);
  // die('Error: ' . mysqli_error($con));
  }
  else{
  die('Error: ' . mysqli_error($con));

}
mysqli_close($con);
?> 
<br>
<br>
click <a href="travellar_logout.php">Logout</a>

