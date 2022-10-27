<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$service= $_POST['service'];
$message= $_POST['message'];
$to = "akoweicollins17@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $subject . "\r\n Message =" . $message;
$headers = "From: noreply@collinsakowei.vercel.app" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thanks.html");
?>