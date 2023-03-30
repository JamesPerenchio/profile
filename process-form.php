<?php
if (isset($_POST['submit'])) {
  $to = "youremail@example.com";
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $headers = "From: " . $_POST['name'] . " <" . $_POST['email'] . ">\r\n" .
    "Reply-To: " . $_POST['email'] . "\r\n" .
    "Content-Type: text/html; charset=UTF-8\r\n";
  if (mail($to, $subject, $message, $headers)) {
    echo "Thank you for contacting us!";
  } else {
    echo "Error sending message.";
  }
}
?>
