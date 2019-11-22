<?php include_once 'module/header.php' ?>
<div class="admin-body">
	<?php
	$proID = mt_rand (1111,9999);
	$target_dir = "../asset/products/";
	$target_file = $target_dir . $proID . '.jpg';
	$uploadOk = 1;

	if (isset($_POST['submit'])) {
		if (empty($_POST['main_category']) || empty($_POST['sub_category']) || empty($_POST['discount']) || empty($_POST['price']) || empty($_POST['rating']) || empty($_POST['title']) || empty($_FILES["fileToUpload"]["tmp_name"])) {
			echo "<div class='error-message'>All Field Are Required. Please Select All Field.</div>";
		} else { 
			$servername = "localhost";
			$username = "root";
			$password = "toor";
			$dbname = "saturn";

			$conn = new mysqli($servername, $username, $password, $dbname);

			if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
			}

			$insertUserData = "INSERT INTO products (id, title, main_category, sub_category, discount, price, rating, added_by) VALUES ('$proID', '$_POST[title]', '$_POST[main_category]', '$_POST[sub_category]', '$_POST[discount]', '$_POST[price]', '$_POST[rating]', 'Biswajit')";

	
				if ($conn->query($insertUserData) === TRUE) {
					// Upload Image
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
						echo "<div class='success-message'>File Successfully Uploaded!</div>";
					} else {
							echo "<div class='error-message'>Sorry! Product Not Uploaded.</div>";
					}
				} else {
						echo "<div class='error-message'>Sorry! Product Not Uploaded.</div>";
				}
	
			$conn->close();
		}
	}
	?>
</div>
<?php include_once 'module/footer.php' ?>