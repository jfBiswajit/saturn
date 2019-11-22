<?php 
  $server = "localhost";
  $user = 'root';
  $pass = 'toor';
  $db = 'saturn';
  $id = $_GET['id'];

  $conn = new mysqli($server, $user, $pass, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "UPDATE orders SET ispaid = 'yes' WHERE customer_id = $id";
  $data = $conn->query($sql);
  if ($data) {
    echo 'success';
  } else {
    echo 'failed';
  }
?> 