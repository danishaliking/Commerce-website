<?php
require('../includes/connect.php');
if (isset($_POST['insert_brand'])) {
  $brand_title = $_POST['brand_title'];
  $select_query = "SELECT * FROM `brands` WHERE brand_title='$brand_title'";
  $result_select = mysqli_query($con, $select_query);
  $number = mysqli_num_rows($result_select);
  if ($number > 0) {
    echo "<script>alert('This brand is already present')</script>";
  } else {
    $insert_query = "INSERT INTO `brands` (brand_title) VALUES ('$brand_title')";
    $result = mysqli_query($con, $insert_query);
    if ($result) {
      echo "<script>alert('Brands has been inserted successfully')</script>";
    }
  }
}
?>

<h2 class="text-center">Insert Brands</h2>
<form action="" method="POST" class="mb-2">
  <div class="input-group w-90 mb-2">
    <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
    <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="brands" aria-describedby="basic-addon1">
  </div>
  <div class="input-group w-10 mb-2 m-auto">

    <input type="Submit" class="border-0 p-2 my-3 bg-info" name="insert_brand" placeholder="Insert brands" value="Insert brands" class="bg-warning">
  </div>
</form>