<?php
$con=mysqli_connect("localhost","root","","cab");
// Check connection
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO driver(dname,dmobile, d_mail,dage, dgender, d_address, d_pwd)
VALUES
('$_GET[dname]','$_GET[dmobile]', '$_GET[d_mail]','$_GET[dage]','$_GET[dgender]','$_GET[d_address]','$_GET[d_pwd]' )";

if (mysqli_query($con,$sql)==false)
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Successfully added you";
mysqli_close($con);
?> 