<?php
//get data from form  

$name = $_POST['Your Full Name *'];
$email= $_POST['Your Email *'];
$subject= $_POST['Your Subject...'];
$message= $_POST['Your Message...'];
$to = "omgosavi614@gmail.com";
$subject = "Mail From Your Personal Portfolio Website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message. "\r\n Subject =" .$subject;
$headers = "From: noreply@mypersonalportfolio07.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:ThankYou.html");
?>


