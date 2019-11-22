<?php
  $frist_name = $_GET['fname'];
  $last_name = $_GET['lname'];
  $email = $_GET['email'];
  $city = $_GET['city'];
  $post = $_GET['post'];
  $full_address = $_GET['fulladdress'];
  $password = $_GET['password'];

  $server = "localhost";
  $user = 'root';
  $pass = 'toor';
  $db = 'saturn';

  $conn = new mysqli($server, $user, $pass, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM users WHERE email = '$email'";
  $data = $conn->query($sql);

  if ($data->num_rows) {
    echo "<h3>Existing Account!</h3>";
    echo '<a href="http://localhost/DEV/public/shop/user_login.php">Click Here To Login</a>';
  } else {
      $insertUserData = "INSERT INTO users (frist_name, last_name, email, city, post, full_address, password) VALUES ('$frist_name', '$last_name', '$email', '$city', '$post', '$full_address', '$password')";

      if ($conn->query($insertUserData)) {
        echo "<h3>Successfully Register!</h3>";
        echo '<a href="http://localhost/DEV/public/shop/user_login.php">Click Here To Login</a>';
      } else {
        echo "<h3>Sorry! Something Went Wrong Please Try Later.</h3>";
      }
  }
  $conn->close();
?>

<a href=""></a>