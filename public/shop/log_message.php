<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    header('location: /');
    exit;
}
  session_start();
  unset($_SESSION['productID']);
  require_once $_SERVER["DOCUMENT_ROOT"] . '/app/config/db_config.php';
  
  $email = $_GET['email'];
  $password = $_GET['password'];

  if (isset($_SESSION['email'])) {
    header('location: /');
  }

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $data = $conn->query($sql);

  if ($data->num_rows) {
    $row = $data->fetch_assoc();
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $row['frist_name'];
    
    header('location: /');
  } else {
    echo "<h3>Email Or Passowrd Not Match!</h3>";
    echo "<a href = 'user_login.php'>Try Again?</a>";
  }
?> 