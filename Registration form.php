<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<form action="" class="frm">
  <table border="1" class="table">
    <caption><h1>Registration Form</h1></caption>
    <tr>
      <td>
        <label for="name">Enter Student Name:</label>
      </td>
      <td>
        <input type="text" name="name" id="name" size="1" placeholder="Enter Student Name" required>
      </td>
    </tr>
    <tr>
      <td>
        <label for="fname">Enter Father Name:</label>
      </td>
      <td>
        <input type="text" name="fname" id="fname" placeholder="Enter Father Name" required>
      </td>
    </tr>
    <tr>
      <td>
        <label for="email">Enter Email:</label>
      </td>
      <td>
        <input type="email" name="email" id="email" placeholder="Enter Email" required>
      </td>
    </tr>
    <tr>
      <td>
        <label for="phone">Enter Phone Number:</label>
      </td>
      <td>
        <input type="number" name="phone" id="phone" placeholder="Enter Phone Number" required>
      </td>
    </tr>
    <tr>
      <td>
        <label for="address">Enter Address:</label>
      </td>
      <td>
        <input type="text" name="address" id="address" placeholder="Enter Address" required>
      </td>
    </tr>
    <tr>
      <td>
        <label for="city">Enter City:</label>
      </td>
      <td>
        <input type="text" name="city" id="city" placeholder="Enter City" required>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" name="submit" value="Register">
      </td>
    </tr>
  </table>
</form>
</body>

</html>
<!-- using style -->
<style>
  .tbl{
    width: 50%;
    border-collapse: collapse;
  }
  .tbl tr{
    border-bottom: 1px solid #ddd;
  }
  .tbl td{
    padding: 20px;
  }
  .tbl label{
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #0056b3;

  }
  .tbl input[type="text"],  
  .tbl input[type="email"],
  .tbl input[type="number"]{
    width: 90%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    color: #007bff;

  }

  .frm {
    width: 500px;
    margin: 0 auto;
    padding: 20px;
    color: #007bff;
    background-color: powderblue;
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f4f4f4; 
  }

  .table {
    width: 100%;
    border-collapse: collapse;
    border-color: #007bff;
    border-width: 0ch;
  }

  .table caption {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
  }

  .table tr {
    border-bottom: 1px solid #ddd;
  }

  .table td {
    padding: 10px;
  }

  .table label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .table input[type="text"],
  .table input[type="email"],
  .table input[type="number"] {
    width: 90%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    color: #007bff;
  }

  .table input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
  }
  .tble{
    background-color:  powderblue;
    
  }

  .table input[type="submit"]:hover {
    background-color: #0056b3;
  }

  
</style>

      <center>
    <table border="1" class="tble" >

    <?php
// create php code for registration form
if(isset($_GET['submit']))
{
    $name = $_GET['name'];
    $fname = $_GET['fname'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];
    $city = $_GET['city'];

    echo "<tr><td>"."Student Name is: "."</td> <td>".$name."</td> </tr>"."<br>";
    echo "<tr><td>"."Father Name is: "."</td> <td>".$fname." </td> </tr>"."<br>";
    echo "<tr> <td>"."Email is: "."</td> <td>" .$email."</td> </tr>"."<br>";
    echo "<tr><td>"."Phone Number is: "."</td><td>".$phone."</td> </tr>"."<br>";
    echo "<tr><td>"."Address is: "."</td> <td>".$address."</td></tr>"."<br>";
    echo "<tr><td>"."City is: "."</td> <td>".$city."</td></tr>"."<br>";
    
}

?>
</table>
</center>


