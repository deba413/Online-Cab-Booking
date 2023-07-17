<?php
$con=mysqli_connect("localhost","root","","cab");
// Check connection
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO traveler(tname, tmobile, tmail, tdob, tgender, taddress, pwd)
VALUES
('$_GET[tname]','$_GET[tmobile]', '$_GET[tmail]','$_GET[tdob]','$_GET[tgender]','$_GET[taddress]','$_GET[pwd]' )";

if (mysqli_query($con,$sql)==false)
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Successfully your registration completed";
echo "<br><br><a href='home.html'>' <-Back '</a>;";
mysqli_close($con);
?> 
