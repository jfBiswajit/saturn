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

  $sql = "UPDATE orders SET order_status = 'delivered' WHERE customer_id = $id";
  $conn->query($sql);
?>