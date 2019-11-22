<?php include_once 'module/header.php' ?>
<form class="admin-body" action="upload.php" method="post" enctype="multipart/form-data">
  <div class="new-product">Add New Products</div>
  <div class="product-1">
    <input type="text" name="title" size="10" placeholder="Title">
    <select name='main_category'>
      <option value="">Main Category</option>
      <option value="men">Men</option>
      <option value="women">Women</option>
      <option value="kids">Kids</option>
    </select> 
    <select name='sub_category'>
      <option value="">Sub Category</option>
      <option value="men-T-shirt">men-T-shirt</option>
      <option value="men-Formal">men-Formal</option>
      <option value="men-jens">men-jens</option>
      <option value="women-T-shirt">women-T-shirt</option>
      <option value="women-Formal">women-Formal</option>
      <option value="women-jens">women-jens</option>
    </select>
    <input type="text" name="discount" placeholder="discount" size="4">
    <input type="text" name="price" placeholder="price" size="4">
    <input type="text" name="rating" placeholder="Rating" size="4">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Add Product" name="submit">
  </div>
  <hr>
  <!-- Only for decoration -->
  <div class="product-1">
    <input type="text" name="" size="10" placeholder="Title">
    <select name=''>
      <option value="">Main Category</option>
      <option value="men">Men</option>
      <option value="women">Women</option>
      <option value="kids">Kids</option>
    </select>
    <select name=''>
      <option value="">Sub Category</option>
      <option value="">men-T-shirt</option>
      <option value="">men-Formal</option>
      <option value="men-jens">men-jens</option>
      <option value="">women-T-shirt</option>
      <option value="">women-Formal</option>
      <option value="">women-jens</option>
    </select>
    <input type="text" name="" placeholder="discount" size="4">
    <input type="text" name="" placeholder="price" size="4">
    <input type="text" name="r" placeholder="Rating" size="4">
    <input type="file" name="" id="fileToUpload">
    <input type="submit" value="Add Product" name="">
  </div>
  <hr>
  <div class="product-1">
    <input type="text" name="" size="10" placeholder="Title">
    <select name=''>
      <option value="">Main Category</option>
      <option value="men">Men</option>
      <option value="women">Women</option>
      <option value="kids">Kids</option>
    </select>
    <select name=''>
      <option value="">Sub Category</option>
      <option value="">men-T-shirt</option>
      <option value="">men-Formal</option>
      <option value="men-jens">men-jens</option>
      <option value="">women-T-shirt</option>
      <option value="">women-Formal</option>
      <option value="">women-jens</option>
    </select>
    <input type="text" name="" placeholder="discount" size="4">
    <input type="text" name="" placeholder="price" size="4">
    <input type="text" name="r" placeholder="Rating" size="4">
    <input type="file" name="" id="fileToUpload">
    <input type="submit" value="Add Product" name="">
  </div>
  <hr>
  <div class="product-1">
    <input type="text" name="" size="10" placeholder="Title">
    <select name=''>
      <option value="">Main Category</option>
      <option value="men">Men</option>
      <option value="women">Women</option>
      <option value="kids">Kids</option>
    </select>
    <select name=''>
      <option value="">Sub Category</option>
      <option value="">men-T-shirt</option>
      <option value="">men-Formal</option>
      <option value="men-jens">men-jens</option>
      <option value="">women-T-shirt</option>
      <option value="">women-Formal</option>
      <option value="">women-jens</option>
    </select>
    <input type="text" name="" placeholder="discount" size="4">
    <input type="text" name="" placeholder="price" size="4">
    <input type="text" name="r" placeholder="Rating" size="4">
    <input type="file" name="" id="fileToUpload">
    <input type="submit" value="Add Product" name="">
  </div>
  <hr>
  <div class="product-1">
    <input type="text" name="" size="10" placeholder="Title">
    <select name=''>
      <option value="">Main Category</option>
      <option value="men">Men</option>
      <option value="women">Women</option>
      <option value="kids">Kids</option>
    </select>
    <select name=''>
      <option value="">Sub Category</option>
      <option value="">men-T-shirt</option>
      <option value="">men-Formal</option>
      <option value="men-jens">men-jens</option>
      <option value="">women-T-shirt</option>
      <option value="">women-Formal</option>
      <option value="">women-jens</option>
    </select>
    <input type="text" name="" placeholder="discount" size="4">
    <input type="text" name="" placeholder="price" size="4">
    <input type="text" name="r" placeholder="Rating" size="4">
    <input type="file" name="" id="fileToUpload">
    <input type="submit" value="Add Product" name="">
  </div>
</form>
<?php include_once 'module/footer.php' ?>