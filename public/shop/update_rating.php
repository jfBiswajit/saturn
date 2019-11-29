<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    header('location: /');
    exit;
}
  require $_SERVER["DOCUMENT_ROOT"] . '/app/config/db_config.php';

  $proID = $_GET['proid'];
  $getRating = $_GET['rating'];
  $oldRating = 0;

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