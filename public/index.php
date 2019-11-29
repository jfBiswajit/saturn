<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/header.php' ?>

<section id="body-layout">
  <nav class="main-nav">
    <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/navbar.php' ?>
  </nav>
  <div class="slider-container m-3">
    <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/main_slider.php' ?>
  </div>
  <div class="highlighted-product-left">
    <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/highlighted_left.php' ?>
  </div>
</section>

<section id="highlighted-products">
  <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/highlighted_products.php' ?>
</section>

<section id="latest-product" class="section-container">
  <div class="section-title">
    <h1>LATEST PRODUCT'S</h1>
    <p>The Most Recent Product's From Saturn</p>
  </div>
  <div class="section-body mt-4">
    <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/multi_slider.php' ?>
  </div>
</section>

<section id="flash-sale" class="section-container">
  <div class="section-title">
    <h1>FLASH SALE</h1>
    <p>Flash Sale Going On</p>
  </div>
  <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/flash_sale.php' ?>
</section>

<section id="top-selection" class="section-container">
  <div class="section-title more-btn-container">
    <div class="left">
      <h1>Top Selection</h1>
      <p>Most Popular On Saturn</p>
    </div>
    <div class="right">
      <a href="#" class="more-btn">MORE</a>
    </div>
  </div>
  <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/top_selection.php' ?>
</section>

<section id="Featured-categories" class="section-container">
  <div class="section-title">
    <h1>FEATURED CATEGORIES</h1>
    <p>Most Popular Categories</p>
  </div>
  <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/featured_categories.php' ?>
</section>

<section id="recomended-product" class="section-container">
  <div class="section-title more-btn-container">
    <div class="left">
      <h1>RECOMMENDED</h1>
      <p>Recomended Products by Saturn</p>
    </div>
    <div class="right">
      <a href="#" class="more-btn">MORE</a>
    </div>
  </div>
  <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/recomended.php' ?>
</section>

<section id="seasonal-product" class="section-container">
  <div class="section-title">
    <h1>GET READY FOR WINTER</h1>
    <p>Get Warmer With Saturn</p>
  </div>
  <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/seasonal_product.php' ?>
</section>

<section id="discover-for-him" class="section-container">
  <div class="section-title more-btn-container">
    <div class="left">
      <h1>DISCOVER FOR HIM</h1>
      <p>Discover From Men's</p>
    </div>
    <div class="right">
      <a href="#" class="more-btn">MORE</a>
    </div>
  </div>
  <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/him.php' ?>
</section>

<section id="discover-for-her" class="section-container">
  <div class="section-title more-btn-container">
    <div class="left">
      <h1>DISCOVER FOR HER</h1>
      <p>Discover From Women's</p>
    </div>
    <div class="right">
      <a href="#" class="more-btn">MORE</a>
    </div>
  </div>
  <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/her.php' ?>
</section>

<section id="hot-deals" class="section-container mb-5">
  <div class="section-title more-btn-container">
    <div class="left">
      <h1>HOT DEAL'S</h1>
      <p>Find Product's With Maximum Discount</p>
    </div>
    <div class="right">
      <a href="#" class="more-btn">MORE</a>
    </div>
  </div>
  <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/hot_deals.php' ?>
</section>

<!-- Shopping bag icon -->
<div class="bag">
  <div class="top">
    <img src="asset/icons/bag.svg" alt="">
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

<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/footer.php' ?>