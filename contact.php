<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  
  // Validate the data (optional)
  if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo "Please fill in all fields.";
  } else {
    // Send the data to your email or database
    // (use a mail function or database query here)
    mail("petluzenas@gmail.com", "$subject", "Name: $name\nEmail: $email\nMessage: $message");
    echo "Thank you for contacting me!";
  }
}
?>

