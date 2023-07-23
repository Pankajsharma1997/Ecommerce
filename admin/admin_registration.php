<?php
include('../includes/connect.php');
if(isset($_POST['submit']))
{
    $admin=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];

    //insert query
    $insert_admin="insert into admin_table (admin_name,admin_email,admin_password,admin_confirm_password) values('$admin','$email','$password','$confirm_password')";

   $result_query=mysqli_query($con,$insert_admin);
    if($result_query){
            echo "<script> alert('Admin registration sucessfully')</script>";
           }
}  
?>
<!-- Html Part -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Registration page</title>
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body{
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Registration</h2>
        <div class="row d-flex justify-content-center ">
            <div class="col-lg-6 col-xl-5">
                <img src="./images/adminreg.jpg" alt="Admin Registration" class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-4">

                <form action="" method="post" onsubmit="return validate()">
                    <div class="form-outline mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="fullname" id="user" placeholder="Enter your username" required="required" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" required="required" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required="required" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Enter your confirm_password" required="required" class="form-control">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-info py-2 px-3 border-0" name="submit" value="submit">Register</button>
                        <!-- <input type="submit" class="bg-info py-2 px-3 border-0" name="admin_registration" value="Register"> -->
                        <p class="small fw-bold mt-2 pt-1">Do you already have an account? 
                            <a href="index.php" class="link-danger">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="admin_reg.js"> </script> 
</html>