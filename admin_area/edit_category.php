<?php
if (isset($_GET['edit_category'])) {
    $edit_category = $_GET['edit_category'];
    $get_category = "SELECT * FROM `categories` WHERE category_id=$edit_category";
    $result = mysqli_query($con, $get_category);
    $row = mysqli_fetch_assoc($result);
    $category_title = $row['category_title'];
}

if (isset($_POST['edit_cat'])) {
    $cat_title = $_POST['category_title'];
    $update_query = "update `categories` set category_title='$cat_title' where category_id='$edit_category'";
    $result_cat = mysqli_query($con, $update_query);
    if ($result_cat) {
        echo "<script>alert('Category been is updated successfully')</script>";
        echo "<script>window.open('./index.php?view_categories.php','_self')</script>";
    }
}
?>

<div class="container mt-3">
    <h1 class="text-center">Edit Category</h1>
    <form action="" method="post" class="text-center">
        <div class="form-outline mb-4 w-50  mb-4 m-auto">
            <label for="category_title" class="form-label">Category title</label>
            <input type="text" name="category_title" value="<?php echo $category_title; ?>" id="category_title" class="form-control" required="required">
        </div>
        <div class="w-50 m-auto">
            <input type="submit" name="edit_cat" value="update category" class="btn btn-info px-3 mb-3">
        </div>
    </form>
</div>