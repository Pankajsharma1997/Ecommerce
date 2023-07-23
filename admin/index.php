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
/* admin login image icon */
        .icon{
          height:80%;
          width:80%;
        }
    </style>
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Login</h2>
        <div class="row d-flex justify-content-center ">
            <div class="col-lg-6 col-xl-5">
                <img src="./images/admin login.jpeg" alt="Admin Login" class="img-fluid icon">
            </div>
            <div class="col-lg-6 col-xl-4">
                <form action="" method="post" >
                    <div class="form-outline mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" placeholder="Enter your username" required="required" class="form-control" autocomplete="off">
                    </div>

                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required="required" class="form-control">
                    </div>

                    <div>
                        <button type="submit" class=" btn btn-info btn-link"  my-1 border-0" name="admin_login" value="Login"> <a href="main_page.php" class="link-light"> Login </a>
                        </button>
                        <p class="small fw-bold mt-2 pt-1">Don't you have an account? 
                            <a href="admin_registration.php" class="link-danger">Register</a>
                        </p>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>