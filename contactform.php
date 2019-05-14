<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$number = $POST['number'];
$pass = $POST['pass'];
$address = $POST['address'];
$message = $POST['message'];

if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected);
}
}


$email_from = "support@sofluence.com";
$email_subject = "New contact form submission";
$email_body = "User Name : $name.\n".
                "User Email : $visitor_email.\n".
                "User number : $number.\n".
                 "User pass : $pass.\n".
                 "User address : $address.\n".
                    "User TimeZone : $selected.\n".
                 "User Message : $message.\n";

$to = "tkarmakar27112000@gmail.com";
$headers = "From: $email_from\r\n";
$headers = "Reply-to: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);


?>