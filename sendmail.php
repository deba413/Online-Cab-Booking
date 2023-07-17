<?php

if(defined('E_DEPRECATED'))
{
	error_reporting(error_reporting() & ~E_DEPRECATED);
}


require 'class.phpmailer.php';

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);

$mail->Username = $_POST['un'];
$mail->Password = $_POST['pw'];
$mail->SetFrom($_POST['un']);
$mail->Subject = $_POST['sub'];
$mail->Body = $_POST['msg'];
$mail->AddAddress($_POST['to']);
$mail->AddAttachment($_FILES['a']['tmp_name'], $_FILES['a']['name']);

if(!$mail->Send())
{
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
    echo "Message has been sent";
}

?>


