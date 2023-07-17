<?php


$con=mysqli_connect("localhost","root","","cab");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
session_start();
$uid = $_SESSION['uid'];

$result = mysqli_query($con,"SELECT * FROM traveler where tmail='" .$uid. "'" );

$row = mysqli_fetch_array($result);

if($result){

echo "<form action='travellar_updateuser.php'>";

echo "<table align='center' border='2' cellpadding='20'>";

echo "<tr>";

echo "<th>New number</th>";

echo "<th><input type='text' value='".$_GET['tmobile']. "' name='tmobile'></th>";

echo "</tr>";

echo "<tr>";

// echo "<th>New mail</th>";

// echo "<th><input type='text' value='". $row['tmail'] . "' name='tmail'></th>";

// echo "</tr>";

// echo "<tr>";
echo "<th>New address</th>";

echo "<th><input type='text' value='".$_GET['taddress']. "' name='taddress'></th>";

echo "</tr>";

echo "<tr>";
// echo "<th>New password</th>";

// echo "<th><input type='text' value='". $row['pwd'] . "' name='pwd'></th>";

// echo "</tr>";

// echo "<tr>";


echo "<th colspan='2'><input type='submit' value='UPDATE'></th>";

echo "</tr>";

echo "</table>";

echo "</form>";
}
?>
  

