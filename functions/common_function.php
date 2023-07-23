<?php
 // including connect file
 include('./includes/connect.php');

 // getting products
 function getproducts()
 {
  global $con;

  // condition to check isset or not
  if(!isset($_GET['category']))
  {
    if(!isset($_GET['SHG'])){
 $select_query="select * from products order by rand()";
        $result_query=mysqli_query($con,$select_query);
        while($row=mysqli_fetch_assoc($result_query))
        {
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image1=$row['product_image1'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $SHG_id=$row['SHG_id'];

          echo" <div class='col-md-4 mb-3'>
        <div class='card'>
        <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
           <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
            <p class='card-text'> $product_description   </p>
           <a href='#' class='btn btn-info'> Add to cart</a>
           <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'> View more</a>
         </div>
       </div>
       </div>";
        }

 }
}
}
// getting all products 
function get_all_product(){
  global $con;

  // condition to check isset or not
  if(!isset($_GET['category']))
  {
    if(!isset($_GET['SHG'])){
 $select_query="select * from products order by rand()";
        $result_query=mysqli_query($con,$select_query);
        while($row=mysqli_fetch_assoc($result_query))
        {
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image1=$row['product_image1'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $SHG_id=$row['SHG_id'];

          echo" <div class='col-md-4 mb-3'>
        <div class='card'>
        <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
           <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
            <p class='card-text'> $product_description   </p>
           <a href='#' class='btn btn-info'> Add to cart</a>
           <a href='#' class='btn btn-secondary'> View more</a>
         </div>
       </div>
       </div>";
        }

 }
}
}

//getting unique categories
function get_unique_categories()
 {
  global $con;
  // condition to check isset or not
  if(isset($_GET['category']))
  {
    $category_id=$_GET['category'];
 $select_query="select * from products where category_id=$category_id";
        $result_query=mysqli_query($con,$select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows==0)
        {
          echo"<h2 class='text-danger mx-4'> No stock for this category</h2>";
        }
        while($row=mysqli_fetch_assoc($result_query))
        {
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image1=$row['product_image1'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $SHG_id=$row['SHG_id'];

          echo" <div class='col-md-4 mb-3'>
        <div class='card'>
        <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
           <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
            <p class='card-text'> $product_description   </p>
           <a href='#' class='btn btn-info'> Add to cart</a>
           <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'> View more</a>
         </div>
       </div>
       </div>";
        }

 }
}

//getting products of unique self help group 
function get_unique_SHG()
 {
  global $con;
  // condition to check isset or not
  if(isset($_GET['SHG']))
  {
    $SHG_id=$_GET['SHG'];
 $select_query="select * from products where SHG_id=$SHG_id";
        $result_query=mysqli_query($con,$select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows==0)
        {
          echo"<h2 class='text-danger mx-4'> This SHG or Self Help Group is not availble for service </h2>";
        }
        while($row=mysqli_fetch_assoc($result_query))
        {
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image1=$row['product_image1'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $SHG_id=$row['SHG_id'];

          echo" <div class='col-md-4 mb-3'>
        <div class='card'>
        <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
           <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
            <p class='card-text'> $product_description   </p>
           <a href='#' class='btn btn-info'> Add to cart</a>
           <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'> View more</a>
         </div>
       </div>
       </div>";
        }

 }
}

 // display the  SHG self help group in side navbar
 function getShg(){
 global $con;
 $select_SHG="select * from shg";
$result_SHG=mysqli_query($con,$select_SHG);
while($row_data=mysqli_fetch_assoc($result_SHG))
{
  $SHG_title=$row_data['SHG_title'];
  $SHG_id=$row_data['SHG_id'];
  echo" <li class ='nav-item'>
  <a href ='product.php?SHG=$SHG_id' class='nav-link text-light'> $SHG_title</a>
</li>";
}
}
// displaying categories in side nav
function getcategory(){
  global $con;
  $select_category="select *from categories";
  $result_category=mysqli_query($con,$select_category);
  while($row_data=mysqli_fetch_assoc($result_category))
  {
    $category_title=$row_data['category_title'];
    $category_id=$row_data['category_id'];
    echo" <li class='nav-item'>
    <a href='product.php?category=$category_id'class='nav-link text-light'>$category_title </a>";
  }
}

//searching products function
function search_product(){
  global $con;
if(isset($_GET['search_data_product'])){
  $search_data_value=$_GET['search_data'];
 $search_query="select * from products where product_keywords like'%$search_data_value%'";
        $result_query=mysqli_query($con, $search_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows==0)
        {
          echo"<h2 class='text-danger mx-4'> No Result match. NO products found on this category </h2>";
        }
        while($row=mysqli_fetch_assoc($result_query))
        {
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image1=$row['product_image1'];
          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $SHG_id=$row['SHG_id'];

          echo" <div class='col-md-4 mb-3'>
        <div class='card'>
        <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
           <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
            <p class='card-text'> $product_description   </p>
           <a href='#' class='btn btn-info'> Add to cart</a>
           <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'> View more</a>
         </div>
       </div>
       </div>";
        }

 }
}
 // view detail function
 function view_details(){
  global $con;

  // condition to check isset or not
  if(isset($_GET['product_id']))
  {
  if(!isset($_GET['category']))
  {
    if(!isset($_GET['SHG'])){
      $product_id=$_GET['product_id'];
 $select_query="select * from products where product_id=$product_id";
        $result_query=mysqli_query($con,$select_query);
        while($row=mysqli_fetch_assoc($result_query))
        {
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $product_image1=$row['product_image1'];
          $product_image2=$row['product_image2']; 
          $product_image3=$row['product_image3'];

          $product_price=$row['product_price'];
          $category_id=$row['category_id'];
          $SHG_id=$row['SHG_id'];

          echo" <div class='col-md-4 mb-3'>
        <div class='card'>
        <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
           <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
            <p class='card-text'> $product_description   </p>
           <a href='#' class='btn btn-info'> Add to cart</a>
           <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'> View more</a>
         </div>
       </div>
       </div>
       <div class='col-md-8'>
           <div class='row'> 
                <div class='col-md-12'>
              <h4 class='text-center text-danger mb-5'> Related Products </h4> 
                </div>

          
                <div class='col-md-6'> 
                <img src='./admin/product_images/$product_image2' class='card-img-top' alt='Product Image'>
                </div>

                <div class='col-md-6'> 
                <img src='./admin/product_images/$product_image3' class='card-img-top' alt='Product Image'>  
                </div>
            </div>
        </div>";
        }

 }
}
 }

}

// get Ip address function
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  

?>