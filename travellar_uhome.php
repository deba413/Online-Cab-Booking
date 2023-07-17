<html>
<style type="text/css">
    *{
      font-weight: 1000;

    }
    body{
      background-color:lightgoldenrodyellow;
    }
  	th,td{
		padding: 10px 40px;
	}
	tr{
    background-color:yellow;
		/* background-color: rgb(228, 31, 31); */
	}
	td{
    background-color:lightcoral;
		/* background-color: rgb(45, 91, 99); */
	}
  th{
    color:blue;
  }
  B{
    color:darkblue;
  }
  button{
    border:none;
    background:transparent;
  }
</style>
	<body>

<?php
$con=mysqli_connect("localhost","root","","cab");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

	session_start();
	// $_SESSION['uid']=$tmail;
	// echo "Welcome " . $_SESSION['uname'];
echo "<table border='0' align='center'>";
$result = mysqli_query($con,"SELECT * FROM traveler WHERE tmail = '". $_SESSION['uid']. "'");
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
  		echo "<br><B>Name</B>           : " .$row['tname'];
      echo "<br><B>Mobile Number</B>  : " .$row['tmobile'];
      echo "<br><B>Email</B>          : " .$row['tmail'];
      echo "<br><B>Address</B>        : " .$row['taddress'];
      echo"<br><B>Date of Birth</B>   : " .$row['tdob'];
      echo"<br><B>Gender</B>          : " .$row['tgender'];
    echo"</td>";
    echo"</tr>";
    
    echo"<tr align='center'>";
    echo "<td>";
    echo"<button type='submit' class='btn'><a href='travellar_edituser.php?tmail=$row[tmail]&tmobile=$row[tmobile]&taddress=$row[taddress]'>Edit Profile</button></a>";
    echo"<br><br><button type='submit' class='btn'><a href='travellar_logout.php'>Log out</button></a></B>";
    echo "<br><br><button type='submit' class='btn'><a href='bokking_request_form.php'><b>book your car</b></a></button>";
    echo"</td>";
    echo "</tr>";
    
  }
  else
  break;
}
echo"</table>";

	

  // $tmail= $_SESSION['uid'];
$result = mysqli_query($con,"SELECT * FROM booking where tmail='" .  $_SESSION['uid'] . "'");

echo "<table border='1'>
<tr>
<th>Bokking's Request id</th>
<th>picup address</th>
<th>dropping address</th>
<th>picup date</th>
<th>picup time</th>
<th>car type</th>
<th>Driver's Id</th>
<th>Charge</th>
<th>Payment Status</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['tr_id'] . "</td>";
  // echo "<td>" . $row['tmail'] . "</td>";
  echo "<td>" . $row['pic_up_address'] . "</td>";
  echo "<td>" . $row['dropping_address'] . "</td>";
  echo "<td>" . $row['pic_up_date'] . "</td>";
  echo "<td>" . $row['pic_up_time'] . "</td>";
  echo "<td>" . $row['car_type'] . "</td>";
  echo "<td>" . $row['d_mail'] . "</td>";
  echo "<td>" .$row['Cost']. "</td>";
  if($row['pament'] == 'New')
	// echo "<td><a href='payment_from.php?  &Cost=". $row['Cost'] . ",tr_id=" . $row['tr_id'] . "'>Payment</td>";
  echo "<td><a href='payment_form.php?Cost=$row[Cost]&tr_id=$row[tr_id]'>Payment</td>";

  else

	echo "<td>Payed success</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
<!-- <br><br><B><a href="travellar_logout.php">Log out</a></B>
<br><br><a href='bokking_request_form.php'><b>book your car</b></a>; -->
</body>
</html>