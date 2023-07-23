<?php
//database connection string
include('../includes/connect.php');

if(isset($_POST['insert_product']))
{
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keyword=$_POST['product_keyword'];
    $product_category=$_POST['product_category'];
    $product_SHG=$_POST['product_SHG'];
    $product_price=$_POST['product_price'];
    $product_status='true';

    //accessing images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];
    
    //accessing image temp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];

    //checking empty condition 
    if($product_title=='' or $product_description=='' or $product_keyword=='' or $product_category=='' or $product_SHG=='' or  $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3=='' )
    {
        echo "<script> alert('please fill all the available fields')</script>";
        exit();
    }
    else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2"); 
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        // select data from database
        $select_query="select * from products where product_title= '$product_title'";
        $result_query=mysqli_query($con,$select_query);
        $number=mysqli_num_rows($result_query);
        if($number>0){
            echo"<script>alert('This product is present inside the database') </script>";
          }
        else{
// insert query
       $insert_products="insert into products(product_title,product_description,product_keywords,category_id,SHG_id,product_image1,product_image2,product_image3,product_price,date,status) values('$product_title','$product_description','$product_keyword', '$product_category','$product_SHG', '$product_image1','$product_image2','$product_image3','$product_price',Now(),'$product_status')";
        $result_query=mysqli_query($con,$insert_products);
       if($result_query){
        echo "<script> alert('Sucessfully inserted  the Products')</script>";
       }
    }
}
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin dashboard</title>
     <!-- Bootstrap css link  -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- internal stylesheet -->
    <style>
        /* // for positioning the input box in center  */
        .position{
            margin-left: 280px;
        }
        </style>

</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center"> Insert Products </h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Product Title -->
            <div class="form-outline mb-3  w-50 position">
                <label for ="product_title" class="form-label"> Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required>
             </div>

             <!-- Product Description-->
            <div class="form-outline  mb-3  w-50 position">
                <label for ="product_description" class="form-label"> Product Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required>
             </div>

              <!-- Product Keyword-->
             <div class="form-outline  mb-3  w-50 position">
                <label for ="product_keyword" class="form-label"> Product Keyword</label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="Enter Product Keyword" autocomplete="off" required>
             </div>

             <!-- categories -->
             <div class="form-outline mb-3 w-50 position"> 
                <select name="product_category" id="" class="form-select">
                    <option value="">Select category </option>
                    <?php
                    $select_query="select * from categories";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $category_title=$row['category_title'];
                        $category_id=$row['category_id'];
                        echo"<option value='$category_id'> $category_title</option>";
                    }
                    ?>
                </select>
            </div>
                 <!-- Self Help Group  -->
            <div class="form-outline mb-3 w-50 position"> 
                <select class="form-select" name="product_SHG"  id=""aria-label=".form-select-lg example">
                    <option selected>Select Self Help Group</option>
                    <?php
                    $select_query="select * from shg";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $SHG_title=$row['SHG_title'];
                        $SHG_id=$row['SHG_id'];
                        echo"<option value='$SHG_id'> $SHG_title</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Image 1-->
            <div class="form-outline  mb-3  w-50 position">
                <label for ="product_image1" class="form-label"> Product Image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required>
             </div>

            <!-- Image 2-->
            <div class="form-outline  mb-3  w-50 position">
                <label for ="product_image2" class="form-label"> Product Image 2</label>
                <input type="file" name="product_image2" id="product_image1" class="form-control" required>
             </div>

              <!-- Image 3-->
            <div class="form-outline  mb-3 w-50 position">
                <label for ="product_image3" class="form-label"> Product Image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required>
             </div>
             
             <!-- Product Price-->
             <div class="form-outline  mb-3  w-50 position">
                <label for ="product_price" class="form-label"> Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required>
             </div>
               <div class="form-outline mb-3 w-50 position">
                <button type="submit"name="insert_product" class="btn btn-info mb-3 px-3" value="insert_products"> insert_products</button>
                 </div>

        </form>
    </div>
    
</body>
</html>