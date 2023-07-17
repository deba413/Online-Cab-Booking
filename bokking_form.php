<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    
  </style>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","","cab");
session_start();
// Check connection
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql="INSERT INTO booking (pic_up_address, dropping_address, tmail,pic_up_date, pic_up_time, car_type,Status,pament)
  VALUES 
  ('".$_GET['pic_up_address'] ."', '".$_GET['dropping_address']. "','". $_SESSION['uid'] ."', '" .$_GET['pic_up_date'] ."','". $_GET['pic_up_time']."','".$_GET['car_type']."','New','New')";

if (mysqli_query($con,$sql)==false)
  {
  die('Error: ' . mysqli_error($con));
  }
echo " bokking success";
mysqli_close($con);
?> 
<br><br> back <a href="home.html">Home</a>
</body>
</html>

