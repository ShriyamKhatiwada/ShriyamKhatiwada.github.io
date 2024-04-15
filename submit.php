<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Email information
  $to = "your-email@example.com"; // Replace with your email
  $subject = "New Contact Form Submission";
  $body = "Name: $fullname\nEmail: $email\nMessage:\n$message";

  // Send email
  if (mail($to, $subject, $body)) {
    echo "Message sent successfully.";
  } else {
    echo "Unable to send message. Please try again later.";
  }
} else {
  // If not a POST request, redirect to homepage or display an error message
  header("Location: /");
}
?>
