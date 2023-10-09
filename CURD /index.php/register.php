<?php

// Connect to the database
$db = new mysqli('localhost', 'root', '', 'cuvas');

// Check if the connection was successful
if ($db->connect_error) {
  die('Database connection failed: ' . $db->connect_error);
}
// Get the submitted form data
$name = $_POST['name'];
$email = $_POST['email'];
$cnic = $_POST['cnic'];
  // Insert the data into the database without verification code
  $sql = "INSERT INTO reg3456 (name, email, cnic) VALUES ('$name', '$email', '$cnic')";
  $result = $db->query($sql);

  // If the data was inserted successfully, display a success message
  if ($result) {
    echo '<p class="success">Your account has been created successfully.</p>';
  } else {
    echo 'Registration failed: ' . $db->error;
  }


// Close the database connection
$db->close();

?>
