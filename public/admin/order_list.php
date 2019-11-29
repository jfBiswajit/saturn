<?php include_once 'module/header.php' ?>
<?php
    $server = "localhost";
    $user = 'root';
    $pass = 'toor';
    $db = 'saturn';

    $conn = new mysqli($server, $user, $pass, $db);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT email, frist_name, city, post, product_id, price, ispaid, customer_id FROM users JOIN orders ON users.id = orders.customer_id WHERE order_status = 'pending'";
    $data = $conn->query($sql);

    if ($data->num_rows) {
      $users = [];
      while ($row = $data->fetch_assoc()) {
        array_push($users, $row['email']);
      }
      $users = array_unique($users);
    }
    
      $orderCounter =0;
      $totalPrice = 0;
    if (isset($users)) {
      foreach ($users as $user) {
      $orderCounter++;
      $individualOrderSQL = "SELECT email, frist_name, city, post, product_id, price, ispaid, customer_id FROM users JOIN orders ON users.id = orders.customer_id WHERE email = '$user' AND order_status = 'pending'";
      $individualOrder = $conn->query($individualOrderSQL);
      ?>
      <div class="pending-order">
  <div class="order-control-panel">
    <div class="order-count">ORDER NO: <?php echo $orderCounter?></div>
    <div class="update-status">
      <select name="" id="" class='update'>
        <option>Pending</option>
        <option value="Delivered">Delivered</option>
      </select>
    </div>
  </div>
  <table>
    <thead>
      <tr>
        <th>Email</th>
        <th>frist Name</th>
        <th>City</th>
        <th>Postal</th>
        <th>Product ID</th>
        <th>Quantity</th>
        <th>price</th>
        <th>isPaid</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $totalPrice = 0;
      while($row = $individualOrder->fetch_assoc()) {
        $totalPrice += $row['price'];
        ?>
        <tr data-customerid ='<?php echo $row['customer_id']?>'>
          <td><?php echo $row['email'] ?></td>
          <td><?php echo $row['frist_name'] ?></td>
          <td><?php echo $row['city'] ?></td>
          <td><?php echo $row['post'] ?></td>
          <td><?php echo $row['product_id'] ?></td>
          <td>1</td>
          <td><?php echo $row['price'] ?></td>
          <td><?php echo $row['ispaid'] ?></td>
        </tr>
      <?php
      }
    ?>
        </tbody>
    <tfoot>
      <tr>
        <td style="font-weight: bold">Total</td>
        <td colspan="6"></td>
        <td style="font-weight: bold"><?php echo $totalPrice ?></td>
      </tr>
    </tfoot>
  </table>
</div>
<?php
    }
  } else {
    echo "<h2 style='padding: 1rem; height: 524px'>No Pending Order</h2>";
  }
?>
<?php include_once 'module/footer.php' ?>