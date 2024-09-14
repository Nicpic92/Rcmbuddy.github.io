<?php
$to = $email;
$subject = "Registration Confirmation";
$message = "Hello " . $username . ",\n\nThank you for registering. Your username is " . $username . " and your password is " . $password . ".\n\nBest regards,\nRCMBuddy Team";
$headers = "From: no-reply@rcmbuddy.com";

mail($to, $subject, $message, $headers);
?>
