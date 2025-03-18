<?php
$name = $_POST['name'];
$customer_email = $_POST['email'];
$customer_phone = $_POST['phone'];
$customer_time = $_POST['time'];

$email_from = 'basemga8@gmail.com'

$email_subject = "New Appointment"

$email_body = "User Name: $name.\n".
               "User Email: $customer_email.\n".
                "User Phone Number: $customer_phone.\n".
                "Time and Date: $customer_time.\n";

$to = 'basemmohamedgad1@gmail.com'

$headers = "From: $email_form \r\n"
$headers .= "Reply-To: $customer_email \r\n"

mail($to,$email_subject,$email_body,$headers)

header("Location: index.html")

?>