<?php
  require $_SERVER["DOCUMENT_ROOT"] . '/app/config/db_config.php';
  $id = $_GET['id']; 

  $sql = "UPDATE orders SET ispaid = 'yes' WHERE customer_id = $id";
  $data = $conn->query($sql);
  if ($data) {
    echo 'success';
  } else {
    echo 'failed';
  }
?> 