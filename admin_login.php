<?php
$con=mysqli_connect("localhost","root","","cab");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$apwd = $_GET['apwd'];
$amail= $_GET['amail'];

$result = mysqli_query($con,"SELECT * FROM admin where apwd='" . $apwd . "' and amail='" . $amail. "'" );

$row = mysqli_fetch_array($result);

if($row==null)
{
    echo "Invalid Password/Id";
}
	
else
{
  echo "Loging success" . $row['aname'];
 	mysqli_close($con);
	session_start();
	$_SESSION['uid'] = $row['aname'];
    $_SESSION['uname'] = $row['dmail'];
	header('Location: http://localhost/cab/bokking_display.php');
}
?>