<html>
<style type="text/css">
    *{
      font-weight: 1000;

    }
    body{
      background-color:khaki;
    }
  	th,td{
		padding: 10px 40px;
	}
	tr{
    background-color:antiquewhite;
		/* background-color: rgb(228, 31, 31); */
	}
	td{
    background-color:aquamarine;
		/* background-color: rgb(45, 91, 99); */
	}
  th{
    color:blue;
  }
</style>
	<body>

<?php
	session_start();
	// echo "Welcome " . $_SESSION['uname'];

	// echo"<br><br><a href='driver_edituser.php'><b>Edit</b></a>";
	$con=mysqli_connect("localhost","root","","cab");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  // $tmail= $_SESSION['tmail'];
echo"<table border='0' align='center'>";
$result = mysqli_query($con,"SELECT * FROM driver WHERE d_mail = '". $_SESSION['uid']. "'");
while(true)
{
  $row = mysqli_fetch_array($result);

	if($row != null)
	{
  		// echo "<tr align='center'>";
		// echo "<td>";
		// echo "<img src='file_d.php?mail=" . $row['mail'] . "' width='350' height='300'>";
    // echo "</td>";
    // echo"</tr>";
    echo"<tr align='center'>";
    echo "<td>";
  		echo "<br>Name : " . $row['dname'];
      echo "<br>Mobile Number  : " . $row['dmobile'];
      echo "<br>Email : " . $row['d_mail'];
      echo "<br>Address : " . $row['d_address'];
    echo"</td>";
    echo"</tr>";
    
    echo"<tr align='center'>";
    echo "<td>";
    echo"<button type='submit' class='btn'><a href='driver_edituser.php?d_mail=$row[d_mail]&dmobile=$row[dmobile]&d_address=$row[d_address]'>Edit Profile</button></a>";
    echo"<br><br><button type='submit' class='btn'><a href='driver_logout.php'>Log out</button></a></B>";
    // echo "<br><br><button type='submit' class='btn'><a href='bokking_request_form.php'><b>book your car</b></a></button>";
    echo"</td>";
    echo "</tr>";
    
  }
  else
  break;
}
echo"</table>";

$result = mysqli_query($con,"SELECT * FROM booking where d_mail='" .  $_SESSION['uid'] . "' order by pic_up_date");
if($result){

echo "<table border='1'>
<tr>
<th>Bokking's Request id</th>
<th>Travellar's Mail</th>
<th>picup address</th>
<th>dropping address</th>
<th>picup date</th>
<th>picup time</th>
<th>car type</th>
<th>Payment Status</th>
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
//   echo "<td>" . $row['d_mail'] . "</td>";
  // if($row['Status'] == 'New')
	// echo "<td><a href='Available_driver_list.php?trid=" . $row['tr_id'] . "&tdate=". $row['pic_up_date'] . "'>Assign Driver</td>";
  // else

	echo "<td>Payed success</td>";
  echo "</tr>";
  // }
  }
echo "</table>";
}
mysqli_close($con);
?>
<!-- <br><br><B><a href="driver_logout.php">Logout</a></B> -->
<!-- <br><br><a href='bokking_request_form.php'><b>book your car</b></a>; -->
</body>
</html>