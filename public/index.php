<?php include_once '../app/layout/header.php' ?>

<section id="body-layout">
  <nav class="main-nav">
    <?php include '../app/layout/navbar.php' ?>
  </nav>
  <div class="slider-container m-3">
    <?php include '../app/layout/jitSlider.php' ?>
  </div>
  <div class="offers">
    <?php include '../app/layout/offersGallery.php' ?>
  </div>
</section>

<section id="highlighted-products">
  <?php include_once '../app/layout/trandingGallery.php' ?>
</section>

<section id="latest-product" class="section-container">
  <div class="section-title">
    <h1>LATEST PRODUCT'S</h1>
    <p>The Most Recent Product's From Saturn</p>
  </div>
  <div class="section-body mt-4">
    <?php include_once '../app/layout/multiSlider.php' ?>
  </div>
</section>

<section id="flash-sale" class="section-container">
  <div class="section-title">
    <h1>FLASH SALE</h1>
    <p>Flash Sale Going On</p>
  </div>
  <?php include_once '../app/layout/hotDealsGallery.php' ?>
</section>

<section id="top-selection" class="section-container">
  <div class="section-title">
    <h1>Top Selection</h1>
    <p>Most Popular On Saturn</p>
  </div>
  <?php include_once '../app/layout/bestSealingGallery.php' ?>
</section>

<section id="Featured-categories" class="section-container">
  <div class="section-title">
    <h1>TOP CATEGORIES</h1>
    <p>Most Popular Categories</p>
  </div>
  <?php include_once '../app/layout/topCategories.php' ?>
</section>

<section id="recomended-product" class="section-container">
  <div class="section-title more-btn-container">
    <div class="left">
      <h1>RECOMMENDED</h1>
      <p>Recomended Products by Saturn</p>
    </div>
    <div class="right">
      <!-- <a href="#" class="more-btn">MORE</a> -->
    </div>
  </div>
  <?php include_once '../app/layout/recomendedBySaturn.php' ?>
</section>

<section id="seasonal-product" class="section-container">
  <div class="section-title">
    <h1>GET READY FOR WINTER</h1>
    <p>Get Warmer With Saturn</p>
  </div>
  <?php include_once '../app/layout/offeredBySaturnGallery.php' ?>
</section>

<section id="discover-for-him" class="section-container">
  <div class="section-title more-btn-container">
    <div class="left">
      <h1>DISCOVER FOR HIM</h1>
      <p>Discover From Men's</p>
    </div>
    <div class="right">
      <a href="http://localhost/DEV/shop/mens.php" class="more-btn">MORE</a>
    </div>
  </div>
  <?php include_once '../app/layout/discoverForHimGallery.php' ?>
</section>

<section id="discover-for-her" class="section-container">
  <div class="section-title more-btn-container">
    <div class="left">
      <h1>DISCOVER FOR HER</h1>
      <p>Discover From Women's</p>
    </div>
    <div class="right">
      <a href="http://localhost/DEV/shop/womens.php" class="more-btn">MORE</a>
    </div>
  </div>
  <?php include_once '../app/layout/discoverForHer.php' ?>
</section>

<section id="hot-deals" class="section-container mb-5">
  <div class="section-title more-btn-container">
    <div class="left">
      <h1>HOT DEAL'S</h1>
      <p>Find Product's With Maximum Discount</p>
    </div>
    <div class="right">
      <!-- <a href="#" class="more-btn">MORE</a> -->
    </div>
  </div>
  <?php include_once '../app/layout/hotdeals.php' ?>
</section>
<!-- Shopping bag icon -->
<div class="bag">
  <div class="top">
    <img src="asset/img/bag.svg" alt="">
    <div class="items">0 ITEMS</div>
  </div>
  <div class="price">
    <p>USD 0</p>
  </div>
</div>
<!-- Shopping bag details -->
<div class="bag-details">
  <p>USD 0</p>
  <div class="bag-body">
    <i class="fas fa-times-circle cancel-bag"></i>
    <div class="items">
      <a href="shop/place_order.php" class="card-order-now">Place Order</a>
    </div>
  </div>
</div>
<!-- Loader -->
<div id="loader">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
<?php include_once '../app/layout/footer.php' ?>