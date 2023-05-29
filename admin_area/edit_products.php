<?php
if (isset($_GET['edit_products'])) {
    $edit_id = $_GET['edit_products'];
    // echo $edit_id;
    $get_data = "SELECT * FROM `products` WHERE product_id=$edit_id";
    $result = mysqli_query($con, $get_data);
    $row = mysqli_fetch_assoc($result);
    $product_title = $row['product_title'];
    // echo $product_title;
    $product_description = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];
    $product_image1 = $row['product_image1'];
    $product_image2 = $row['product_image2'];
    $product_image3 = $row['product_image3'];
    $product_price = $row['product_price'];

    //fecting category name
    $select_category = "SELECT * FROM `categories` WHERE category_id=$category_id";
    $result_category = mysqli_query($con, $select_category);
    $row_category = mysqli_fetch_assoc($result_category);
    $category_title = $row_category['category_title'];
    //   echo $category_title;

    //fecting brands name
    $select_brand = "SELECT * FROM `brands` WHERE brand_id=$brand_id";
    $result_brand = mysqli_query($con, $select_brand);
    $row_category = mysqli_fetch_assoc($result_brand);
    $brand_title = $row_category['brand_title'];
    //   echo $brand_title;

}



?>
<div class="container mt-5">
    <h1 class="text-center">Edit Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4 w-50  mb-4 m-auto">
            <label for="product_title" class="form-label">Product title</label>
            <input type="text" name="product_title" value="<?php echo $product_title; ?>" id="product_title" class="form-control" required="required">
        </div>
        <!-- description -->
        <div class="form-outline mb-4 w-50 m-auto mb-4">
            <label for="product_des" class="form-label">Product description</label>
            <input type="text" name="product_desc" value="<?php echo $product_description; ?>" id="product_desc" class="form-control" required="required">
        </div>
        <div class="form-outline mb-4 w-50 m-auto mb-4">
            <label for="product_keywords" class="form-label">Product keywords</label>
            <input type="text" name="product_keywords" value="<?php echo $product_keywords; ?>" id="product_keywords" class="form-control" required="required">
        </div>
        <div class="form-outline mb-4 w-50 m-auto mb-4">
            <label for="product_category" class="form-label">Product Category</label>
            <select name="product_category" class="form-select">
                <option value="<?php echo $category_title; ?>"><?php echo $category_title; ?></option>
                <?php
                //fecting category name
                $select_category_all = "SELECT * FROM `categories`";
                $result_category_all = mysqli_query($con, $select_category_all);
                while ($row_category_all = mysqli_fetch_assoc($result_category_all)) {
                    $category_title = $row_category_all['category_title'];
                    $category_id = $row_category_all['category_id'];
                    echo "<option value='$category_id'>$category_title</option> ";
                };
                ?>
            </select>
        </div>
        <div class="form-outline mb-4 w-50 m-auto mb-4">
            <label for="product_brands" class="form-label">Product Brands</label>
            <select name="product_brands" class="form-select">
                <option value="<?php echo $brand_title; ?>"><?php echo $brand_title; ?></option>
                <?php
                //fecting brand name
                $select_brand_all = "SELECT * FROM `brands`";
                $result_brand_all = mysqli_query($con, $select_brand_all);
                while ($row_brand_all = mysqli_fetch_assoc($result_brand_all)) {
                    $brand_title = $row_brand_all['brand_title'];
                    $brand_id = $row_brand_all['brand_id'];
                    echo "<option value='$brand_id'>$brand_title</option> ";
                };
                ?>
            </select>
        </div>
        <div class="form-outline mb-4 w-50 m-auto mb-4">
            <label for="product_image1" class="form-label">Product Image1</label>
            <div class="d-flex">
                <input type="FILE" name="product_image1" id="product_image1" class="form-control w-90 m-auto" required="required">
                <img src="./product_images/<?php echo $product_image1; ?>" alt="" class="edit_img">
            </div>
        </div>
        <div class="form-outline mb-4 w-50 m-auto mb-4">
            <label for="product_image2" class="form-label">Product Image2</label>
            <div class="d-flex">
                <input type="FILE" name="product_image2" id="product_image2" class="form-control w-90 m-auto" required="required">
                <img src="./product_images/<?php echo $product_image2; ?>" alt="" class="edit_img">
            </div>
        </div>
        <div class="form-outline mb-4 w-50 m-auto mb-4">
            <label for="product_image3" class="form-label">Product Image3</label>
            <div class="d-flex">
                <input type="FILE" name="product_image3" id="product_image3" class="form-control w-90 m-auto" required="required">
                <img src="./product_images/<?php echo $product_image3; ?>" alt="" class="edit_img">
            </div>
        </div>
        <div class="form-outline mb-4 w-50 m-auto mb-4">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" name="product_price" value="<?php echo $product_price; ?>" id="product_price" class="form-control" required="required">
        </div>
        <div class="w-50 m-auto">
            <input type="submit" name="edit_product" value="update product" class="btn btn-info px-3 mb-3">
        </div>
    </form>

</div>

<!-- edit_product -->
<?php
if (isset($_POST['edit_product'])) {
    $product_title = $_POST['product_title'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];

    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    $tmp_image1 = $_FILES['product_image1']['tmp_name'];
    $tmp_image2 = $_FILES['product_image2']['tmp_name'];
    $tmp_image3 = $_FILES['product_image3']['tmp_name'];

    // checkinh for the feilds empty and not
    if ($product_title == '' or $product_desc == '' or $product_keywords == '' or $product_category == '' or $product_brands == '' or $product_image1 == '' or $product_image2 == '' or $product_image3 == '' or $product_price == '') {
        echo "<script>alert('Please fill all the fields and continue the process')</script>";
    } else {
        move_uploaded_file($tmp_image1, "./product_images/$product_image1");
        move_uploaded_file($tmp_image2, "./product_images/$product_image2");
        move_uploaded_file($tmp_image3, "./product_images/$product_image3");

        //query to update products
        $update_product = "update `products` set category_id='$product_category',brand_id='$product_brands',product_image1='$product_image1',product_image2='$product_image2',product_image3='$product_image3',product_price='$product_price',date=NOW() where product_id=$edit_id";
        $result_update = mysqli_query($con, $update_product);
        if ($result_update) {
            echo "<script>alert('Product update successfully')</script>";
            echo "<script>window.open('./insert_product.php','_self')</script>";
        }
    }
}

?>