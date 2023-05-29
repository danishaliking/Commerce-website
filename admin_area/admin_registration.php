<?php include('../includes/connect.php');
include('../functions/common_function.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            overflow-x: hidden;
        }

        .img-fluid {
            width: 80%;
            border: 2px solid light;
            border-radius: 2px;
            /* height: 50%; */
            object-fit: contain;
        }
    </style>
</head>

<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Registration</h2>
        <div class="row d-flex justify-content-center ">
            <div class="col-lg-6 col-xl-5">
                <img src="../images/2.png" alt="admin registration" class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-4">
                <form action="" method="post">
                    <div class="from-outline mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" placeholder="Enter your username" required="required" class="form-control">
                    </div>
                    <div class="from-outline mb-4">
                        <label for="username" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" required="required" class="form-control">
                    </div>
                    <div class="from-outline mb-4">
                        <label for="password" class="form-label">password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required="required" class="form-control">
                    </div>
                    <div class="from-outline mb-4">
                        <label for="confirm_password" class="form-label">Confirm password</label>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Enter your password" required="required" class="form-control">
                    </div>
                    <div>
                        <input type="submit" name="admin_registration" class="bg-info py-2 px-3 border-0" value="Register">
                        <p class="small fw-bold pt-1">Don't have you an account? <a href="admin_login.php" class="link-danger">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>