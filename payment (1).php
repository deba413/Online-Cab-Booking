<?php
$con=mysqli_connect("localhost","root","","cab");
session_start();
if (!$con){
    die("<br/>Some error occured");
}
else{
   $tr_id=$_GET['tr_id'];
   $cardno=$_GET['cardno'];
   $cost=$_GET['cost'];
   $cvv=$_GET['cvv'];
   $tname=$_GET['tname'];
   // $pin=$_GET['pin'];
   // $bankname=$_GET['bankname'];
   // $exp_date=$_GET['exp_date'];
   $expyear=$_GET['expyear'];
   $expmonth=$_GET['expmonth'];
   

   
   $query="SELECT balence FROM payment WHERE cardno ='".$cardno ."' and cvv = '" .$cvv ."' and tname ='" . $tname . "' and expyear='".$expyear."'and expmonth='".$expmonth."'";

   $result=mysqli_query($con,$query);

   $row = mysqli_fetch_array($result);

   if ($row==null){
      echo "No such account found";
      echo"<a href=''>Please Click here to go back";

 }

   else  {
      $cy = date("Y");
      $cm = date("m");
 
      // echo $cy . " " . $cm;
      // echo $expyear;
      // echo $expmonth;
 
     if($cy > $_GET['expyear'])
        die("Card is Expired");
 
    if($cy == $_GET['expyear'] && $cm > $_GET['expmonth'])
        die("Card is Expired");
 
      if($balence>=$cost)
      {
         $sql="UPDATE payment set balence=balence  - '". $cost ."' where cardno ='".$cardno."'";
         $row=mysqli_query($con,$sql);
         $sql="UPDATE booking set pament='Payed' where tr_id='" .$tr_id."'";
         $row=mysqli_query($con,$sql);
         echo"Payment Successfully Done";

      }
      else{
         echo"Insuficient Balence";
      }
  


  
   


   }
   mysqli_close($con);



}



?>
