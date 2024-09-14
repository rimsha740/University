<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'rimshajilani7@gmail.com';

$email_subject = 'New Form Aubmission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";

 $to = 'Rimshajilani7@gmail.com';
 
 $headers = "From: $email_from \r\n";

 mail($to,$email_subject,$email_body,$headers);

 header("Location: contact.html");
?>
