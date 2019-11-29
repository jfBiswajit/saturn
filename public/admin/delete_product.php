<?php
  include_once 'module/db_config.php';
  $id = $_GET['id'];

  $deleteSQL = "DELETE FROM products WHERE id = '$id'";
  $data = $conn->query($deleteSQL);
?>