<?php
require('../includes/connect.php');
if (isset($_POST['insert_cat'])) {
    $category_title = $_POST['cat_title'];
    $select_query = "Select * form `categories` where category_title= '$category_title'";
    $insert_query = "insert into `categories` (category_title) values ('$category_title')";
    $result = mysqli_query($con, $insert_query);
    if ($result) {
        echo "<script>alert('Category has been inserted successfully')</script>";
    }
}
?>
<h2 class="text-center">Insert Categories</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="Categories" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="Submit" class="border-0 p-2 my-3 bg-info" name="insert_cat" placeholder="Insert categories" value="Insert Catagories" class="bg-warning">

    </div>
</form>