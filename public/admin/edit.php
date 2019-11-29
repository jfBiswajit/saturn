<?php include_once 'module/header.php'; include_once 'module/db_config.php'; ?>
<?php
  $sql = 'SELECT * FROM products';
  $data = $conn->query($sql);
  
  if ($data->num_rows) {
    while ($row = $data->fetch_assoc()) {
      ?>
      <div class="edit-items">
        <div class="item" data-proid="<?php echo $row['id'] ?>">
          <span><b>ID: </b><?php echo $row['id'] ?></span>
          <span><b>Title: </b><?php echo $row['title'] ?></span>
          <span><b>Discount: </b><?php echo $row['discount'] ?></span>
          <span><b>Price: </b><?php echo $row['price'] ?></span>
          <span>
            <a href="update.php?id=<?php echo $row['id'] ?>"> Update</a> |
            <a href="details.php?id=<?php echo $row['id'] ?>"> Details</a> |
            <a href="#" class='delete-product'> Delete</a>
          </span>
        </div>
      </div>
      <?php
    }
  }
?>
<?php include_once 'module/footer.php' ?>