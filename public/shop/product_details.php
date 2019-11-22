<?php 
  $server = "localhost";
  $user = 'root';
  $pass = 'toor';
  $db = 'saturn';
  $id = $_GET['proID'];
  $conn = new mysqli($server, $user, $pass, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM products WHERE id = $id";
  $data = $conn->query($sql);
  
  $row = $data->fetch_assoc();
?> 
<?php include_once '../../app/layout/header.php' ?>
<div class="pro-details">
  <div class="pro-notification">Product Details</div>
  <div class="details-body">
    <div class="pro-left">
      <div class="img">
        <img src="asset/products/<?php echo $row['id'] . '.jpg' ?>" alt="">
      </div>
      <div class="rating">
        <?php include '../../app/layout/ratingSystem.php' ?>
      </div>
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
      <div>
        <a class="pro-add" href="#">Add To Cart</a>
      </div>
    </div>
  </div>
</div>
<?php include_once '../../app/layout/footer.php' ?>