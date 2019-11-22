<?php 
  session_start();
  if (isset($_SESSION['email'])) {
    header('location: http://localhost/DEV/');
  }
  unset($_SESSION['productID']);
  $email = $_GET['email'];
  $password = $_GET['password'];
  $server = "localhost";
  $user = 'root';
  $pass = 'toor';
  $db = 'saturn';

  $conn = new mysqli($server, $user, $pass, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $data = $conn->query($sql);

  if ($data->num_rows) {
    $row = $data->fetch_assoc();
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $row['frist_name'];
    echo "<h3>Successfully Login!</h3>";
    echo "<a href = 'http://localhost/DEV/'>Home</a>";
  } else {
    echo "<h3>Email Or Passowrd Not Match!</h3>";
    echo "<a href = 'http://localhost/DEV/'>Home</a>";
  }
?> 