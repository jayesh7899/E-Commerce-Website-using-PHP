<?php
  include('../includes/connect.php');
  if(isset($_POST['insert_cart'])){
    $category_title=$_POST['cart_title'];

    //select data from the database

    $select_query="select * from `categories` where category_title='$category_title'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);

    if($number>0){

      echo "<script>alert('This Category is present inside the database...');</script>";
    }
    else{

    



    $insert_query="insert into `categories` (category_title) values ('$category_title')";

    $result=mysqli_query($con,$insert_query);


    if($result){
      echo "<script>alert('Category has been inserted Successfully...');</script>";
    }

 }}
?>

<h2 class="text-center">Insert Catagories</h2>

<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  
  <input type="text" class="form-control" placeholder="Insert Catagories" name="cart_title" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">
  
  
  <input type="submit" class="bg-info p-2 border-0 my-3" value="Insert Catagoeies" name="insert_cart" >


<!--<button class="bg-info p-2 my-3 border-0">Insert Categoeies</button>-->

</div>
</form>