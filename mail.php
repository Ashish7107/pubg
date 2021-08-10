<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$telegram= $_POST['telegram'];
$transaction= $_POST['transaction'];
$to = "yadavashish7107@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Telegram =" . $telegram . "\r\n  transaction = " . $transaction ;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>