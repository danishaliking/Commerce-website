<?php
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome <?php echo $_SESSION['username'] ?></title>
  <!--boostrap css link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!---font awesome link--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!---style css0--->
  <link rel="stylesheet" href="../style.css">
  <style>
    body {
      overflow-x: hidden;
      height: 100%;
      width: 100%;
      font-size: 15px;
      font-weight: 500;
      color: #0f0c29;
      cursor: pointer;
      z-index: 1;
      transition: all 0.6s ease;
      background-color: rgb(219, 177, 99);

    }

    .profile-img {
      height: 100%;
      width: 90%;
      display: block;
      margin: auto;
      object-fit: contain;
    }
  </style>
</head>

<body>
  <!---navbar--->
  <div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <img src="../images/logo1-removebg-preview.png" alt="" class="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../display_all.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">My Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php
                                                                                                    cart_item();
                                                                                                    ?></sup></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Total price: <?php total_cart_price(); ?>/-</a>
            </li>
          </ul>
          <form class="d-flex" action="../search_product.php" method="GET">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
            <input type="Submit" class="btn btn-outline-dark" name="search_data_product" value="Search">
          </form>
        </div>
      </div>
    </nav>
    <!-- //calling function -->
    <?php
    cart();
    ?>
    <!-- second chilg -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
        <?php
        if (!isset($_SESSION['username'])) {
          echo "  <li class='nav-item'>
  <a class='nav-link' href='#'>Welcome Guest</a>
</li>";
        } else {
          echo " <li class='nav-item'>
  <a class='nav-link' href='#'>Welcome " .  $_SESSION['username'] . "</a>
</li>";
        }

        if (!isset($_SESSION['username'])) {
          echo " <li class='nav-item'>
          <a class='nav-link' href='./users_area/user_login.php'>login</a>
        </li>";
        } else {
          echo " <li class='nav-item'>
          <a class='nav-link' href='./users_area/logout.php'>logout</a>
        </li>";
        }
        ?>
      </ul>
    </nav>

    <!---third child-->

    <div class="bg-light">
      <h3 class="text-center">Hidden Store</h3>
      <p class="text-center">Communication is at the heart of e-commerce and community</p>
    </div>
    <!-- fourth child -->
    <div class="row">
      <div class="col-md-2">
        <ul class="navbar-nav text-center" style="height: 100vh; background-color:lavender;">
          <li class="nav-item bg-warning">
            <a class="nav-link text-dark " href="#">
              <h4>Your Profile</h4>
            </a>
          </li>
          <?php
          $username = $_SESSION['username'];
          $user_image = "SELECT * FROM `user_table` WHERE username='$username'";
          $user_image = mysqli_query($con, $user_image);
          $row_image = mysqli_fetch_array($user_image);
          $user_image = $row_image['user_image'] ?? null;
          echo "<li class='nav-item '>
            <img src='./user_images/$user_image' class='profile-img my-4' alt=''>
           </li>";

          ?>
          <li class="nav-item ">
            <a class="nav-link text-dark " style="font-size: 17px;" href="profile.php">Pending orders</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-dark " style="font-size: 17px;" href="profile.php?edit_account">Edit Account</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-dark " style="font-size: 17px;" href="profile.php?my_orders">My orders</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-dark " style="font-size: 17px;" href="profile.php?delete_account">Delete Account</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-dark " style="font-size: 17px;" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
      <div class="col-md-10 text-center">
        <?php get_user_order_details();
        if (isset($_GET['edit_account'])) {
          include('edit_account.php');
        }
        if (isset($_GET['my_orders'])) {
          include('user_orders.php');
        }
        if (isset($_GET['delete_account'])) {
          include('delete_account.php');
        }
        ?>
      </div>
    </div>
    <!--  last child-->
    <?php
    include("../includes/footer.php");
    ?>
  </div>

  <!--bootstrap js link--->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>