<?php
include('../includes/connect.php');
if(isset($_POST['submit'])){
  $SHG_title=$_POST['SHG_title'];
  //select data from database
  $select_query="select * from shg where SHG_title = '$SHG_title'";
  $result_select =mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo"<script>alert('This Self Helf Group  is present inside the database') </script>";
  }
  else{
    // Insert Self help group in the shg(self help group tabele) 
  $insert_query="insert into shg (SHG_title) values('$SHG_title')";
  $result=mysqli_query($con,$insert_query);
  if($result){
    echo"<script>alert('This Self Helf Group has been inserted sucessfully') </script>";
  }
}
}
?>
<h2 class="text-center"> Insert Self Help Groups</h2>
<form action="" method="post" class="mb-2"> 
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"> </i> </span>
  <input type="text" class="form-control" name="SHG_title" placeholder="Insert Self Help Group(SHG)" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">
  
  <!-- <input type="submit" class="bg-info" name="insert_cat" value="insert categories"> -->
  <button type="submit" class="bg-info p-2 my-3 border-0" name="submit"> Insert(Self Help Group) SHG</button>
</div>

</form>