<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard </title>
    <!-- bootstrap css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- css file -->
    <link rel ="stylesheet" href="../style.css">
    <style>
        .footer{
            position: absolute;
            bottom:0;
        }
        </style>
    <!-- Font awesome link -->
     <!-- font awesome link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
      <nav class ="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid"> 
            <img src="../Images/logo.png" alt="logo" class="logo">
        <nav class ="navbar navbar-expand-lg"> 
            <ul class="navbar-nav"> 
                <li class="nav-item"> 
                    <a href="" class="nav-link"> welcome Pankaj Sharma </a>
                </li> 
            </ul> 
        </nav>
        </div>
      </nav>

      <!-- second child -->
      <div class="bg-light">
        <h3 class="text-center p-2"> Manage Details </h3>
      </div>
      <!-- third child -->
      <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center"> 
         <div class="p-3"> 
            <a href="#"> <img src="../Images/panku.jpg"  class="admin_image"alt="admin image" ></a>
            <p class="text-light text-center"> Pankaj Sharma </p>
         </div>  

         <div class ="button text-center">
            <button> <a href ="insert_product.php" class="nav-link text-light bg-info my-1"> Insert Products</a> </button> 
            <button><a href="" class="nav-link text-light bg-info my-1"> View Products</a></button>

             <!-- button for inserting the category -->
            <button><a href="main_page.php?insert_category" class="nav-link text-light bg-info my-1"> Insert Categories</a></button>

            <button><a href="" class="nav-link text-light bg-info my-1"> view categories </a></button>
             <!-- button for inserting the self help Group -->
            <button><a href="main_page.php?insert_SHG" class="nav-link text-light bg-info my-1"> Insert_SHG</a></button>

            <button><a href="" class="nav-link text-light bg-info my-1"> View Brands</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1"> All Orders </a></button>
            <button><a href="" class="nav-link text-light bg-info my-1"> All Payments </a></button>
            <button><a href="" class="nav-link text-light bg-info my-1"> List Users </a></button>
            <button><a href="" class="nav-link text-light bg-info my-1"> Logout </a></button>

         </div>     
        </div>
      </div>
      <!-- fourth child -->
      <div class="container m-3">
         <?php
        //  condition for insert category
         if(isset($_GET['insert_category'])){
          include('insert_categories.php');
         }
          //  condition for insert brand
          if(isset($_GET['insert_SHG'])){
            include('insert_SHG.php');
           }

         ?>
      </div>
      <div class="bg-info p-3 text-center footer">
        <p> All right reserved coopyright &copy; - Designed by Pankaj & Rohit-2023</p> 
     </div>
    </div>













 <!-- bootstrap css link  -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
</body>
</html>