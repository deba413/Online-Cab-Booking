<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bokking display</title>
  <style type="text/css">
    *{
      font-weight: 1000;
    }
  	th,td{
		padding: 40px;
	}
	tr{
    background-color:gold;
		/* background-color: rgb(228, 31, 31); */
	}
	td{
    background-color:burlywood;
		/* background-color: rgb(45, 91, 99); */
	}
  .navigation {
          background: rgba(0, 0, 0, 0.404);
          padding: 5px 0;
          width: 100%;
          position:sticky;
          top: 0;
          overflow: auto;
          /* background-attachment: fixed; */
        }
          nav a {
          /* float: left; */
  padding: 20px;
  color: white;
  text-decoration: none;
  font-size: 20px;
  width: 25%; /* Four equal-width links. If you have two links, use 50%, and 33.33% for three links, etc.. */
  text-align: center; /* If you want the text to be centered */;
        }
        nav {
          display: flex;
          background-color: #333;
          width: 100%;
          overflow: auto;
        }
        a:hover {
          background-color: #ddd;
          color:black;
          cursor: pointer;
        }
</style>
</head>
<body>
<nav class="nevigation">
        <div></div>
             <a href="home.html">Home</a>
             <!-- <a href="bokking_display.php" class="box">Administration </a></div> -->
              <a href="travelar_display.php" class="box">Travellers</a></div>
              <a href="driver_display.php" class="box">Drivers</a></div>
              <p class="flex-align-left">
              <a href="admin_logout.php">log out</a>
            </p>
          </div>
        </div>
      </nav>
<?php
$con=mysqli_connect("localhost","root","","cab");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM booking order by pic_up_date");

echo "<table border='1'>
<tr>
<th>Bokking's Request id</th>
<th>Travellar's Mail</th>
<th>picup address</th>
<th>dropping address</th>
<th>picup date</th>
<th>picup time</th>
<th>car type</th>
<th>Driver's Id</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['tr_id'] . "</td>";
  echo "<td>" . $row['tmail'] . "</td>";
  echo "<td>" . $row['pic_up_address'] . "</td>";
  echo "<td>" . $row['dropping_address'] . "</td>";
  echo "<td>" . $row['pic_up_date'] . "</td>";
  echo "<td>" . $row['pic_up_time'] . "</td>";
  echo "<td>" . $row['car_type'] . "</td>";
  if($row['Status'] == 'New')
	echo "<td><a href='Available_driver_list.php?trid=" . $row['tr_id'] . "&tdate=". $row['pic_up_date'] . "'>Assign Driver</td>";
  else
  echo "<td>" . $row['d_mail'] . "</td>";
	// echo "<td>Driver Assigned</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
<!-- <br><br><B> back <a href="home.html">Home</a></B> -->
</body> 
</html>
