<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    header('location: /');
    exit;
}
  include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/header.php';
  $newID = array($_GET['productID']);
  if (isset($_SESSION['productID'])) {
    $oldID = $_SESSION['productID'];
    $updateID = array_merge($oldID, $newID);
    $_SESSION['productID'] = $updateID;
  } else {
    $_SESSION['productID'] = $newID; 
  }
  include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/footer.php';
?>