<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Registration Form</h1>
    <form action="register.php" method="POST">

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="cnic">CNIC</label>
        <input type="text" class="form-control" id="cnic" name="cnic" required>
      </div>
      
      <button type="submit" class="btn btn-danger">Register</button>
    </form>
  </div>
</body>
</html>

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
  $sql = "INSERT INTO reg (name, email, cnic) VALUES ('$name', '$email', '$cnic')";
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

