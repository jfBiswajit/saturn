<?php include_once '../../app/layout/header.php' ?>
<?php 
  if (!$_SESSION['email']) {
    header('location: http://localhost/DEV/public/shop/user_login.php');
  }
$uemail = $_SESSION['email'];
$server = "localhost";
$user = 'root';
$pass = 'toor';
$db = 'saturn';

$conn = new mysqli($server, $user, $pass, $db);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$getNameSQL = "select frist_name from users where email = '$uemail'";

$getNameSQL = $conn->query($getNameSQL);
// var_dump($getNameSQL);
if ($getNameSQL) {
  $getName = $getNameSQL->fetch_assoc();
}

?>
<div class="ud-container">
    <div class="ud-name">Hi, <?php echo $getName['frist_name'] ?> <a href="http://localhost/DEV/public/shop/user_logout.php" style="text-decoration: none; color: red; font-weight: bold">(Logout)</a></div>
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

<?php include_once '../../app/layout/footer.php' ?>

<!-- <div class="ud-container">
    <div class="ud-name">Hi, Biswajit</div>
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
          <tr>
          <td>12-10-19 09:35 am</td>
          <td>Men Boots</td>
          <td>1</td>
          <td>1850</td>
        </tr>
        </tbody>
        <tfoot>
          <tr>
            <td>Total</td>
            <td colspan='2'></td>
            <td>500</td>
          </tr>
        </tfoot>
        
      </table>
    </div>
  </div> -->