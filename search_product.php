<!-- conection file -->
<?php
include('includes/connect.php');
include('functions/common_function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce website using php and mysql </title>
    <!-- Bootstrap css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  External stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0"> 
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">

            <img src="./Images/logo.png" alt="" class ="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
          <a class="nav-link text-light" href="about.php">About</a>
        </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="display_all.php">Products</a>
      </li>

<!-- User Registration Link -->
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Register</a>
      </li>

<!-- contact us page -->
      <li class="nav-item">
        <a class="nav-link text-light" href="./contact us.html">Contact</a>
      </li>

<!--  Add to cart link-->
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping">
       </i><sup> <!-- copy cart items funciton -->
          <?php
          cart_item();
        ?></sub></a>
      </li>

<!-- Total Price link -->
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Total Price:100/</a>
      </li>
     </ul>

<!-- Search Button  -->
    <form class="form-inline my-2 my-lg-0"action="" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
      <input type="submit" value="search" class="btn btn-outline-light"name="search_data_product">
    </form>
  </div>
</nav>

<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <ul class="navbar-nav me-auto"> 
    <li class="nav item ">
    <a class="nav-link text-light" href="#">Welcome Guest </a> 
   </li>  
   <li class="nav item">
    <a class="nav-link text-light" href="#">Login</a> 
   </li>
  </ul>
</nav>

 <!-- third child -->
 <div class="bg-light"> 
  <h3 class="text-center"> Product Section </h3>
  <p class="text-center">Mission Dhanwantri- Empowerment of Women Through Herbs </p>
 </div>

 <!-- calling cart function  -->
   <?php
    cart();
    ?>
 <!-- fourth child -->
 <div class="row px-2">
    <div class="col-md-10"> 
    <!-- Product Section -->
       <div class="row">
        <!-- Fetching products -->
        <?php
        //call the function for display the products from database
        search_product();
        get_unique_categories();
        get_unique_SHG();
        ?>

<!-- row end -->
</div>
<!-- column end -->
</div>

   <!-- sidenav -->
    <div class="col-md-2 bg-secondary p-0">
       <!-- self help Groups  -->
   <ul class="navbar-nav me-auto text-center">
    <li class ="nav-item bg-info">
      <a href ="#" class="nav-link text-light"><h6> Self Help Group(SHG) </h6></a>
    </li>
      <?php
      // calling self help group (SHG() for displaying the brands)
      getShg();
      ?>
   </ul>

<!-- Categories to be displayed -->
   <ul class="navbar-nav me-auto text-center">
   <li class ="nav-item bg-info">
      <a href ="#" class="nav-link text-light"><h6> Categories</h6></a>
    </li>
    <?php
      getcategory();
    ?> 
  </ul>
       </div>

</div>

  <!--  include footer -->
    <?php 
     include("./includes/footer.php");
     ?>
     </div>
</body>
<!-- bootstrap js link  -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>