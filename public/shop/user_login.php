<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/header.php' ?>
<?php
  if (isset($_SESSION['email'])) {
    header('location: ./');
  } else {
    unset($_SESSION['productID']);
    ?>
<div id="user-login">
  <form action="shop/log_message.php"> 
    <div class="form-title">
      User Login
    </div>
    <div class="u-form-input">
      <label for="email">Email</label>
      <br>
      <input type="email" name="email" placeholder="Ex: jfbiswajit@gmail.com">
    </div>
    <div class="u-form-input">
      <label for="password">Password</label>
      <br>
      <input type="password" name="password" placeholder="*******************************">
    </div>
    <div class="u-form-flex bottom">
      <div class="u-form-input">
        <input type="submit" value="SIGNUP">
      </div>
      <a href="http://localhost/public/shop/user_reg.php">Create New One?</a>
    </div>
  </form>
</div>
<?php
  }
?>

<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/footer.php' ?>