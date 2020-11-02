<?php
$message = $_POST['message'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$subject = "Enquiry from " . $fname;
$recipient = "projects@key-vah.com";
$formcontent=" From: $email \n Subject: $subject \n Message: $message";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='/' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
