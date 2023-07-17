<?php
$con=mysqli_connect("localhost","root","","cab");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$d_pwd = $_GET['d_pwd'];
$d_mail= $_GET['d_mail'];

$result = mysqli_query($con,"SELECT * FROM driver where d_pwd='" . $d_pwd . "' and d_mail='" . $d_mail. "'" );

$row = mysqli_fetch_array($result);

if($row==null)
{
    echo "Invalid Password/Id";
}
	
else
{
  echo "Loging success" . $row['dname'];
 	mysqli_close($con);
	session_start();
	$_SESSION['uid'] = $row['d_mail'];
    $_SESSION['uname'] = $row['dname'];
	header('Location: http://localhost/cab/driver_uhome.php');
}