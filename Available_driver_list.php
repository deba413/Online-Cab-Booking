<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

$con=mysqli_connect("localhost","root","","cab");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//echo $_GET['tdate'];

$result = mysqli_query($con,"SELECT d_mail FROM driver where d_mail not in (select d_mail from booking where pic_up_date ='" . $_GET['tdate'] . "')" );

echo "<form action='Assign_driver.php'>";
echo "<input type='hidden' value='" . $_GET['trid'] . "' name='trid'>";
echo "<table border='1' align='center' align='center' cellpadding='20'>";
echo "<tr>";
echo "<td>Available Drivers</td>";
echo "<td>";
echo "<select name='d_mail'>";
while($row = mysqli_fetch_array($result))
{
	echo "<option value='" . $row['d_mail'] . "'>" . $row['d_mail'] . "</option>";
}

echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Cost</th>";
echo "<th><input type='number' name='cost'></th>";
echo "</tr>";

echo "<tr>";
echo "<th colspan='2'><input type='submit' value='Assign Driver'></th>";
echo "</tr>";
  
echo "</table>";

echo "</form>";

mysqli_close($con);
?>


</body>
</html>