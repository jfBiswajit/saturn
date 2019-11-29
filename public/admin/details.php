<?php
  include_once 'module/header.php'; include_once 'module/db_config.php';
  $id = $_GET['id'];

  $sql = "SELECT * FROM products WHERE id = $id";
  $data = $conn->query($sql);
  
  $row = $data->fetch_assoc();
?> 

<div class="pro-details">
  <h3>Product Details</h3>
  <div class="details-body">
    <div class="pro-left">
    </div>
    <div class="pro-right">
      <div>
        <span class="bold">Title: </span>
        <span class="normal"><?php echo $row['title'] ?></span>
      </div>
      <div>
        <span class="bold">Price: </span>
        <span class="normal">BDT <?php echo $row['price'] ?></span>
      </div>
      <div>
        <span class="bold">Discount: </span>
        <span class="normal"><?php echo $row['discount'] ?>%</span>
      </div>
      <div>
        <span class="bold">Product ID: </span>
        <span class="normal"><?php echo $row['id'] ?></span>
      </div>
      <div>
        <span class="bold">Category: </span>
        <span class="normal"><?php echo $row['main_category'] ?></span>
      </div>
      <div>
        <span class="bold">Added On: </span>
        <span class="normal"><?php echo $row['added_on'] ?></span>
      </div>
      <div>
        <span class="bold">By: </span>
        <span class="normal"><?php echo $row['added_by'] ?></span>
      </div>
    </div>
  </div>
</div>
<?php include_once 'module/footer.php' ?>