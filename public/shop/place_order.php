<?php
  if(!isset($_SERVER['HTTP_REFERER'])){
    header('location: /');
    exit;
  }
    include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/header.php';
    require $_SERVER["DOCUMENT_ROOT"] . '/app/config/db_config.php';

    if (!isset($_SESSION['email'])) {
      header('location: user_login.php');
    }
  ?>
  
  <?php
    if (isset($_SESSION['productID'])) {
      ?>
      <div class="order-table-container">
      <div class="order-notification-success">
        <p>Your order has been successfully placed!</p>
      </div>
      <table id="order-summery">
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Price (BDT)</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $productIDs = $_SESSION['productID'];
            $email = $_SESSION['email'];
            $updatePrice = 0;
            $getID = "SELECT id FROM users WHERE email = '$email'";
            $id = $conn->query($getID);
            $id = $id->fetch_assoc();
            $id = $id['id'];
            foreach ($productIDs as $val) {
              $sql = "SELECT * FROM products WHERE id = $val";
              $data = $conn->query($sql);
              
              if ($data->num_rows) {
                while ($row = $data->fetch_assoc()) {
                  $currentAmount = (int) $row['price'];
                  $updatePrice += $currentAmount;
                  $insertUserData = "INSERT INTO orders (product_id, price, order_status, ispaid, customer_id) VALUES ( '$val', $currentAmount, 'pending', 'no', $id)";
                  $conn->query($insertUserData);
                  ?>
                  <tr>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                  </tr>
                  <?php
                }
              }
            }
            unset($_SESSION['productID']);
          ?>
        </tbody>
        <tfoot>
          <tr>
            <td style="font-weight: bold;">Total</td>
            <td style="font-weight: bold;" colspan="2"><?php echo $updatePrice ?></td>
          </tr>
        </tfoot>
      </table>
    </div>
      <a href="shop/pay.php?amount=<?php echo $updatePrice ?>&email=<?php echo $email?>&id=<?php echo $id ?>" class='pay-btn'>Pay Now</a>
    <?php
    } else {
      header('location: /');
    }
    include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/footer.php';
  ?>