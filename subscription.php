<?php

session_start();
if(isset($_SESSION['mail'])){
    header( 'Location: http://localhost/testing/amount.php');
}

else{
    echo "<center><a href='loginform.php'>Please login first</center></a>";
}

?>