<?php
if (isset($_GET['edit_brands'])) {
    $edit_brands = $_GET['edit_brands'];
    $get_brands = "SELECT * FROM `brands` WHERE brand_id=$edit_brands";
    $result = mysqli_query($con, $get_brands);
    $row = mysqli_fetch_assoc($result);
    $brand_title = $row['brand_title'];
}

if (isset($_POST['edit_brand'])) {
    $brand_title = $_POST['brand_title'];
    $update_query = "update `brands` set brand_title='$brand_title' where brand_id=$edit_brand";
    $result_brand = mysqli_query($con, $update_query);
    if ($result_brand) {
        echo "<script>alert('Brand been is updated successfully')</script>";
        echo "<script>window.open('./index.php?view_brands.php','_self')</script>";
    }
}
?>

<div class="container mt-3">
    <h1 class="text-center">Edit Brand</h1>
    <form action="" method="post" class="text-center">
        <div class="form-outline mb-4 w-50  mb-4 m-auto">
            <label for="brand_title" class="form-label">Brand title</label>
            <input type="text" name="brand_title" value="<?php echo $brand_title; ?>" id="brand_title" class="form-control" required="required">
        </div>
        <div class="w-50 m-auto">
            <input type="submit" name="edit_brand" value="update brand" class="btn btn-info px-3 mb-3">
        </div>
    </form>
</div>