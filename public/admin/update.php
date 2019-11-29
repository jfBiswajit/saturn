<?php include_once 'module/header.php'; include_once 'module/db_config.php'; ?>

<?php
  $id = $_GET['id'];
  $sql = "SELECT * FROM products WHERE id = $id";
  $data = $conn->query($sql);
  $row = $data->fetch_assoc();

  if (isset($_GET['submit'])) {
    $id = $_GET['id'];
    $title = $_GET['title'];
    $price = $_GET['price'];
    $discount = $_GET['discount'];


    $updateSQL = "UPDATE products SET id = '$id', title = '$title', price = '$price', discount = '$discount'  WHERE id = '$id'";
    
    if ($conn->query($updateSQL)) {
      echo "<div class='success-message update-success'>File Successfully Uploaded!</div>";
    } else {
      echo "<div class='error-message update-success'>Sorry Product Not Updated!</div>";
    }
  }
?>
<form action="" method="get">
  <div class="update-products">
    <div>
      <label for="">ID</label>
      <input type="text" name="id" id="" value="<?php echo $row['id'] ?>">
    </div>
    <div>
      <label for="">Title</label>
      <input type="text" name="title" id="" value="<?php echo $row['title'] ?>">
    </div>
    <div>
      <label for="">Price</label>
      <input type="text" name="price" id="" value="<?php echo $row['price'] ?>">
    </div>
    <div>
      <label for="">Discount</label>
      <input type="text" name="discount" id="" value="<?php echo $row['discount'] ?>">
    </div>
    <input type="submit" value="Update Product" class="update-btn" name="submit">
  </div>
</form>
<?php include_once 'module/footer.php' ?>