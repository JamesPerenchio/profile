<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (empty($name) || empty($email) || empty($subject) || empty($message)) {
  die('Error: All fields are required.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  die('Error: Invalid email format.');
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'your_email@gmail.com'; // Replace with your own email address
  $mail->Password = 'your_email_password'; // Replace with your own email password
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;

  $mail->setFrom($email, $name);
  $mail->addAddress('recipient_email@example.com'); // Replace with your own email address
  $mail->addReplyTo($email, $name);

  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = $message;

  $mail->send();
  echo 'Message sent!';
} catch (Exception $e) {
  echo 'Error: ' . $e->getMessage();
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'your_email@gmail.com'; // Replace with your own email address
  $mail->Password = 'your_email_password'; // Replace with your own email password
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;

  $mail->setFrom($email, $name);
  $mail->addAddress('recipient_email@example.com'); // Replace with your own email address
  $mail->addReplyTo($email, $name);

  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = $message;

  $mail->send();
  echo 'Message sent!';
} catch (Exception $e) {
  echo 'Error: ' . $e->getMessage();
}
?>