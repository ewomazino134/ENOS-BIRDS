<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set the email recipient and subject
  $to = 'omaduvieewomazino@gmail.com';
  $subject = 'Form Submission';

  // Create the email body
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Set the email headers
  $headers = array(
    'From' => $email,
    'Reply-To' => $email,
    'X-Mailer' => 'PHP/' . phpversion()
  );

  // Send the email
  mail($to, $subject, $body, $headers);

  // Display a success message
  echo "Thank you for contacting us!";
} else {
  // Display an error message if the form is not submitted
  echo "Error: Form not submitted";
}
?>