<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["fullName"];
  $email = $_POST["Email"];
  $message = $_POST["message"];
  
  $to = "yourgoogleemail@gmail.com";
  $subject = "Form submission from " . $name;
  $body = "From: $name\nEmail: $email\nMessage:\n$message";
  
  if (mail($to, $subject, $body)) {
    echo "Thank you for your submission!";
  } else {
    echo "Sorry, there was an error sending your message.";
  }
}
?>
