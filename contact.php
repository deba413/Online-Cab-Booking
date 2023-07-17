<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Feadback</title>
  <style>
    body{
      background-color:beige;
    }
    .cf{
      text-align: center;
    }
  </style>
</head>
<body>
<?php
   $con=mysqli_connect("localhost","root","","cab");
   // Check connection
   if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
     session_start();
     $tname=$_SESSION['uname'];
     $tmail=$_SESSION['uid'];
     $result = mysqli_query($con,"SELECT * FROM traveler WHERE tmail = '".$tmail. "'");
     $row = mysqli_fetch_array($result);

	if($row != null)
	{
echo"<form class='cf' action='contact_insert.php' method='POST'>
  <table>
<h1>Contact Us</h1>
  <div class='half left cf'>
    <input type='text' id='input-name' placeholder='Name' name='tname' value='".$tname."'><br><br>
    <input type='email' id='input-email' placeholder='Email address' name='tmail' value='" .$tmail."'><br><br>
    <input type='text' id='input-subject' placeholder='Subject' name='subject'><br><br>
  </div>
  <div class='half right cf'>
  <textarea name='message' type='text' id='input-message' placeholder='Message'></textarea><br><br>
  </div>  
  <input type='submit' value='Submit' id='input-submit'>
  </table>
</form>";
  }

?>
</body>
</html>