<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_from = ' 1dt21cs064@dsatm.edu.in';
$email_subject ='New Form Submission';
$email_body = "User Name: $name.\n".
            "User Email: $visitor_email.\n". 
            "Subject: $subject.\n". 
            "User Message: $message.\n";

 $to = 'karnamaushmitareddy@gmail.com'           ;
 $headers='From: $email_from \r\n';
 $headers .= "Reply-To: $visitor_email \r\n";

 mail($to,$email_subject, $email_body);

 header("Location: contact.html");

?>

