<?php
  include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/header.php';
  require $_SERVER["DOCUMENT_ROOT"] . '/app/config/db_config.php';

  $uemail = $_SESSION['email'];
  $getNameSQL = "select frist_name from users where email = '$uemail'";
  $getNameSQL = $conn->query($getNameSQL);

  if (!$_SESSION['email']) {
    header('location: user_login.php');
  }

  if ($getNameSQL) {
    $getName = $getNameSQL->fetch_assoc();
  }
?>

<div class="ud-container">
    <div class="ud-name">Hi, <?php echo $getName['frist_name'] ?> <a href="shop/user_logout.php" style="text-decoration: none; color: red; font-weight: bold">(Logout)</a></div>
    <div class="pending-order">
      <h3 class="py-3">Pending Order</h3>
      <table>
        <thead>
          <tr>
            <th>Ordered On</th>
            <th>Title</th>
            <th>Quantity</th>
            <th>Price</th>
           </tr>
        </thead>
        <tbody>
          <?php

          $individualOrderSQL = "SELECT ordered_on, email, frist_name, city, post, product_id, price, ispaid, customer_id FROM users JOIN orders ON users.id = orders.customer_id WHERE email = '$uemail' AND order_status = 'pending'";

          $individualOrder = $conn->query($individualOrderSQL);
          $amount = 0;
          if ($individualOrder) {
            while ($row = $individualOrder->fetch_assoc()) {
              $amount += $row['price'];
              ?>
          <tr>  
            <tr>
            <td><?php echo $row['ordered_on'] ?></td>
            <td><?php echo $row['product_id'] ?></td>
            <td>1</td>
            <td><?php echo $row['price'] ?></td>
          </tr>
              <?php
            }
          }
        ?>
        </tbody>
        <tfoot>
          <tr>
            <td>Total</td>
            <td colspan='2'></td>
            <td><?php echo $amount ?></td>
          </tr>
        </tfoot>
        
      </table>
    </div>
  </div>

<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/footer.php' ?>