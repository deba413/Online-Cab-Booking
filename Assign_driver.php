<html><body>
<?php
$con=mysqli_connect("localhost","root","","cab");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$trid = $_GET['trid'];
$dmail = $_GET['d_mail'];
$cost = $_GET['cost'];


$sql = "update booking set d_mail='" . $dmail . "', status='Assigned', cost=" . $cost . " where tr_id='" . $trid . "'";

$result = mysqli_query($con,$sql);

echo "<center>Driver and cost Assigned Successfully";

mysqli_close($con);
