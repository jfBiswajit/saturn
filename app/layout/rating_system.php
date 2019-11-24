  <div <?php if (!isset($_SESSION['email'])) {echo "style='pointer-events: none'";} ?> class="stars <?php echo $row['rating'] ?>">
    <i class="far fa-star" id="s1"></i>
    <i class="far fa-star" id="s2"></i>
    <i class="far fa-star" id="s3"></i>
    <i class="far fa-star" id="s4"></i>
    <i class="far fa-star" id="s5"></i>
  </div>