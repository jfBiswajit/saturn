<?php 
  $server = "localhost";
  $user = 'root';
  $pass = 'toor';
  $db = 'saturn';

  $conn = new mysqli($server, $user, $pass, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = 'SELECT * FROM products';
  $data = $conn->query($sql);
  
  if ($data->num_rows) {
    while ($row = $data->fetch_assoc()) {
      echo $row['id'] . ' ';
    }
  }
?> 