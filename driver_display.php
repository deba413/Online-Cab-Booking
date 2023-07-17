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
        height:30px;
        width: 1150px;
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
             <a href="bokking_display.php">Back</a>
             <!-- <a href="bokking_display.php" class="box">Administration </a></div> -->
              <!-- <a href="traveller_regform.php" class="box">Traveller's Registraion</a></div> -->
              <!-- <a href="drivers_reg_form.php" class="box">Driver's Registraion</a></div> -->
              <!-- <p class="flex-align-left">
              <a href="loging_pannel_form.php">log in</a> -->
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

$result = mysqli_query($con,"SELECT * FROM driver ");

echo "<table border='1'>
<tr>
<th>Name</th>
<th> Mail Id</th>
<th>Gender</th>
<th>Age </th>
<th>Mobile Number</th>
<th>Address</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['dname'] . "</td>";
  echo "<td>" . $row['d_mail'] . "</td>";
  echo "<td>" . $row['dgender'] . "</td>";
  echo "<td>" . $row['dage'] . "</td>";
  echo "<td>" . $row['dmobile'] . "</td>";
  echo "<td>" . $row['d_address'] . "</td>";
//   echo "<td>" . $row['pic_up_date'] . "</td>";
//   echo "<td>" . $row['pic_up_time'] . "</td>";
//   echo "<td>" . $row['car_type'] . "</td>";
//   if($row['Status'] == 'New')
// 	echo "<td><a href='Available_driver_list.php?trid=" . $row['tr_id'] . "&tdate=". $row['pic_up_date'] . "'>Assign Driver</td>";
//   else
//   echo "<td>" . $row['d_mail'] . "</td>";
// 	// echo "<td>Driver Assigned</td>";
//   echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
<!-- <br><br><B> back <a href="home.html">Home</a></B> -->
</body> 
</html>