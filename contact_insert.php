
    <?php
    $con=mysqli_connect("localhost","root","","cab");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      session_start();
       $sql="INSERT INTO feadback(tname,tmail,subject,message)
       VALUES
       ('$_POST[tname]','$_POST[tmail]','$_POST[subject]','$_POST[message]')";
       if(mysqli_query($con,$sql)==false)
       {
        die('Error:'.mysqli_error($con));
       }   
       echo"<center>thanks for your feadback</center>";
       mysqli_close($con);

    ?>
