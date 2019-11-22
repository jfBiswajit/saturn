<?php
  $proID = $_GET['proid'];
  $getRating = $_GET['rating'];
  $server = "localhost";
  $user = 'root';
  $pass = 'toor';
  $db = 'saturn';
  $oldRating = 0;

  $conn = new mysqli($server, $user, $pass, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM products where id = $proID";
  $data = $conn->query($sql);
  
  if ($data->num_rows) {
    $row = $data->fetch_assoc();
    $oldRating = $row['rating'];
    $updateRating = ($getRating + $oldRating) / 2;

    $update = "UPDATE products SET rating = $updateRating WHERE id = $proID";
    $conn->query($update);
  }


?>