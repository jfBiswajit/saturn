<?php 
  $server = "localhost";
  $user = 'root';
  $pass = 'toor';
  $db = 'saturn';

  $conn = new mysqli($server, $user, $pass, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM products WHERE main_category = 'men' ORDER BY ID DESC LIMIT 5";
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
        <?php include '../app/layout/rating_system.php' ?>
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



<!-- Orginal code -->
<!-- <div class="section-body mt-4 d-flex" data-aos="fade-left">
  <div class="item">
    <div class="img">
      <img src="asset/img/best-sealing/item-1.jpg" alt="">
    </div>
    <div class="details">
      <div class="price">
        <p>BDT 1500</p>
        <p>25% OFF</p>
      </div>
      <div class="rating">
        <button>Add To Cart</button>
        <?php include '../app/layout/ratingSystem.php' ?>
      </div>

    </div>
    <div class="add-to-cart"></div>
  </div>
  <div class="item">
    <div class="img">
      <img src="asset/img/best-sealing/item-2.jpg" alt="">
    </div>
    <div class="details">
      <div class="price">
        <p>BDT 1800</p>
        <p>15% OFF</p>
      </div>
      <div class="rating">
        <button>Add To Cart</button>
        <?php include '../app/layout/ratingSystem.php' ?>
      </div>
    </div>
    <div class="add-to-cart"></div>
  </div>
  <div class="item">
    <div class="img">
      <img src="asset/img/best-sealing/item-3.jpg" alt="">
    </div>
    <div class="details">
      <div class="price">
        <p>BDT 1800</p>
        <p>15% OFF</p>
      </div>
      <div class="rating">
        <button>Add To Cart</button>
        <?php include '../app/layout/ratingSystem.php' ?>
      </div>
    </div>
    <div class="add-to-cart"></div>
  </div>
  <div class="item">
    <div class="img">
      <img src="asset/img/best-sealing/item-4.jpg" alt="">
    </div>
    <div class="details">
      <div class="price">
        <p>BDT 1800</p>
        <p>15% OFF</p>
      </div>
      <div class="rating">
        <button>Add To Cart</button>
        <?php include '../app/layout/ratingSystem.php' ?>
      </div>
    </div>
    <div class="add-to-cart"></div>
  </div>
  <div class="item">
    <div class="img">
      <img src="asset/img/best-sealing/item-5.jpg" alt="">
    </div>
    <div class="details">
      <div class="price">
        <p>BDT 1800</p>
        <p>15% OFF</p>
      </div>
      <div class="rating">
        <button>Add To Cart</button>
        <?php include '../app/layout/ratingSystem.php' ?>
      </div>
    </div>
    <div class="add-to-cart"></div>
  </div>
</div> -->