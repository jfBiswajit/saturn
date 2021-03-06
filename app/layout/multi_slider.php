<?php 
  require_once $_SERVER["DOCUMENT_ROOT"] . '/app/config/db_config.php';

  $sql = 'SELECT * FROM products ORDER BY ID DESC LIMIT 10';
  $data = $conn->query($sql);
?>

<div id="exampleSlider" data-aos="fade-right">
  <div class="MS-content">
    <?php
      if ($data->num_rows) {
      while ($row = $data->fetch_assoc()) {
        ?>
        <div class="item">
        <img src="asset/products/<?php echo $row['id'] ?>.jpg" alt="">
        <div class="product-details">
          <p class="title">USD <?php echo $row['price'] ?></p>
        </div>
        </div>
        <?php
      }
    }
    $conn->close();
    ?>
  </div>
  <div class="MS-controls">
    <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
    <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
  </div>
</div>
