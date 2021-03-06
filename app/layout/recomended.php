<?php 
  require $_SERVER["DOCUMENT_ROOT"] . '/app/config/db_config.php';

  $sql = 'SELECT * FROM products WHERE rating >= 4 ORDER BY ID ASC LIMIT 10';
  $data = $conn->query($sql);

  if ($data->num_rows) {
?>
  <div class="section-body mt-4 d-flex" data-aos="fade-left">
  <?php
    while ($row = $data->fetch_assoc()) {
  ?>

  <div class="card item" data-productid="<?php echo $row['id'] ?>" data-producttitle="<?php echo $row['title'] ?>" data-sl="<?php echo $row['sl'] ?>" data-producttitle="<?php echo $row['title'] ?>">
    <a href="./shop/product_details.php?proID=<?php echo $row['id'] ?>">
      <div class="img">
        <img src="asset/products/<?php echo $row['id'] . '.jpg' ?>" alt="">
      </div>
    </a>
    <div class="details">
      <div class="price">
        <p>USD <?php echo $row['price'] ?></p>
        <?php if ($row['discount'] >= 4) {
              ?>
        <p class="discount"><?php echo $row['discount'] ?>% OFF</p>
        <?php 
            }
            ?>
      </div>
      <div class="rating">
        <button class="add-to-cart">Add To Cart</button>
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/app/layout/rating_system.php' ?>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
</div>
<?php
}
$conn->close();
?>