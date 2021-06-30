<?php
//get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$Contact= $_POST['phone'];
$to = "Singhaakash084@gmail.com;
$subject = "Mail From Shalender Arts";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ."\r\n Mobile Numer =". $Contact;
$headers = "From: noreply@studioshalender.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
