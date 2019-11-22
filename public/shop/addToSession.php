<?php include_once '../../app/layout/header.php' ?>
<?php
  $newID = array($_GET['productID']);
  if (isset($_SESSION['productID'])) {
    $oldID = $_SESSION['productID'];
    $updateID = array_merge($oldID, $newID);
    $_SESSION['productID'] = $updateID;
  } else {
    $_SESSION['productID'] = $newID;
  }
?>
<?php include_once '../../app/layout/footer.php' ?>