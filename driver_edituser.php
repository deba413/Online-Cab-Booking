<?php
$con=mysqli_connect("localhost","root","","cab");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

session_start();
$uid = $_SESSION['uid'];

$result = mysqli_query($con,"SELECT * FROM driver where d_mail='" . $uid . "'" );

$row = mysqli_fetch_array($result);

echo "<form action='driver_updateuser.php'>";

echo "<table align='center' border='2' cellpadding='20'>";

echo "<tr>";

echo "<th>New number</th>";

echo "<th><input type='text' value='". $_GET['dmobile'] . "' name='dmobile'></th>";

echo "</tr>";

echo "<tr>";

// echo "<th>New mail</th>";

// echo "<th><input type='text' value='". $row['tmail'] . "' name='tmail'></th>";

// echo "</tr>";

// echo "<tr>";
echo "<th>New address</th>";

echo "<th><input type='text' value='". $_GET['d_address'] . "' name='d_address'></th>";

echo "</tr>";

echo "<tr>";
// echo "<th>New password</th>";

// echo "<th><input type='text' value='". $row['d_pwd'] . "' name='pwd'></th>";

// echo "</tr>";

// echo "<tr>";


echo "<th colspan='2'><input type='submit' value='Update'></th>";

echo "</tr>";

echo "</table>";

echo "</form>";
?>