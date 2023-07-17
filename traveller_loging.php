<?php
$con=mysqli_connect("localhost","root","","cab");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$pwd = $_GET['pwd'];
$tmail = $_GET['tmail'];

$result = mysqli_query($con,"SELECT * FROM traveler where pwd='" . $pwd . "' and tmail='" . $tmail . "'" );

$row = mysqli_fetch_array($result);

if($row==null)
{
    echo "Invalid password/email";
}
	
else
{
  echo "Welcome " . $row['tname'];
 	mysqli_close($con);
	session_start();
	$_SESSION['uid'] = $row['tmail'];
  $_SESSION['uname'] = $row['tname'];
	header('Location: http://localhost/cab/travellar_uhome.php');
}