<?php
  include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/header.php';
  require $_SERVER["DOCUMENT_ROOT"] . '/app/config/db_config.php';

  if (isset($_SESSION['email'])) {
    header('location: /');
  } else {
    ?>
<div id="user-login">
  <form action="shop/reg_message.php">
    <div class="form-title">
      User Registration
    </div>
    <div class="u-form-flex">
      <div class="u-form-input">
        <label for="fname" id="fname-label">Frist Name</label>
        <br>
        <input type="text" name="fname" placeholder="Ex: Biswajit" id="fname">
      </div>
      <div class="u-form-input">
        <label for="lname" id="lname-label">Last Name</label>
        <br>
        <input type="text" name="lname" placeholder="Ex: Biswas" id="lname">
      </div>
    </div>
    <div class="u-form-input">
      <label for="email" id="email-label">Email</label>
      <br>
      <input type="email" name="email" placeholder="Ex: jfbiswajit@gmail.com" id="email">
    </div>
    <div class="u-form-flex">
      <div class="u-form-input">
        <label for="city" id="city-label">City</label>
        <br>
        <input type="text" name="city" placeholder="Ex: Dhaka" id="city">
      </div>
      <div class="u-form-input">
        <label for="post" id="post-label">Post Code</label>
        <br>
        <input type="text" name="post" placeholder="Ex: 1216" id="post">
      </div>
    </div>
    <div class="u-form-input">
      <textarea name="fulladdress" cols="30" rows="12" placeholder="Enter Your Full Address Here"></textarea>
    </div>
    <div class="u-form-input">
      <label for="password" id="password-label">Password</label>
      <br>
      <input type="password" name="password" placeholder="*******************************" id="password">
    </div>
    <div class="u-form-flex bottom">
      <div class="u-form-input">
        <input type="submit" value="SIGNUP" id="submit">
      </div>
      <a href="shop/user_login.php">Already Have Account?</a>
    </div>
  </form>
</div>
<?php
  }
?>
<script src="asset/js/validation.js"></script>
<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/footer.php'; ?>