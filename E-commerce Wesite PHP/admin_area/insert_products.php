<?php
  include('../includes/connect.php');
  if(isset($_POST['insert_product']))
  {
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keyword=$_POST['product_keyword'];
    $product_category=$_POST['product_category'];
    $product_brand=$_POST['product_brand'];
    $product_price=$_POST['product_price'];
    $product_status='true';

    //accessing images

    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];

    //accessing images temp name

    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];

    //checking empty condition
    if($product_title=='' or $product_description=='' or $product_keyword=='' or $product_category=='' or $product_brand=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3=='')
    {
        echo"<script>alert('Please fill all the available fields..');</script>";
        exit();
    }
    else{

        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");
        //move_uploaded_file($temp_image1,"./product_images/$product_image1");
        //move_uploaded_file($temp_image2,"./product_images/$product_image2");
        //move_uploaded_file($temp_image3,"./product_images/$product_image3");

        //insert query

        $insert_products="insert into `products` (product_title,product_description,product_keyword,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) values('$product_title','$product_description','$product_keyword','$product_category','$product_brand','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";


        $result_query=mysqli_query($con,$insert_products);
        if($result_query){

            echo"<script>alert('Successfully inserted the products..');</script>";

        }



    }
  }

?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products Admin Dashboard</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">

</head>
<body class="bg-light">
    <div class="container mt-3">
        <h2 class="text-center">Insert Products</h2>

        <!--form here-->

        <form action="" method="post" enctype="multipart/form-data">
            <!--title-->
            <div class="form-outline mb-4 w-50 m-auto">

            <label for="product_title" class="form-label">Product Title</label>

            <input type="text" name="product_title" id="product_title" class="form-control"
             placeholder="Enter product title" autocomplete="off" required="required">

            </div>

            <!--description-->

            <div class="form-outline mb-4 w-50 m-auto">

            <label for="product_description" class="form-label">Product Description</label>

            <input type="text" name="product_description" id="product_description" class="form-control"
             placeholder="Enter product description" autocomplete="off" required="required">

            </div>


             <!--keywords-->

             <div class="form-outline mb-4 w-50 m-auto">

            <label for="product_keyword" class="form-label">Product Keywords</label>

            <input type="text" name="product_keyword" id="product_keyword" class="form-control"
            placeholder="Enter product keywords" autocomplete="off" required="required">

            </div>


            <!--categories-->

            <div class="form-outline mb-4 w-50 m-auto">

            <select name="product_category" id="" class="form-select">

                <option value="">Select a category</option>

                <?php

                    $select_query="select * from `categories`";
                    $result_query=mysqli_query($con,$select_query);

                    while($row=mysqli_fetch_assoc($result_query)){
                        $category_title=$row['category_title'];
                        $category_id=$row['category_id'];

                        echo"<option value='$category_id'>$category_title</option>";


                    }

                ?>
                <!--<option value="">Fruits</option>
                <option value="">Vegetables</option>
                <option value="">Icecreame</option>
                <option value="">Chips</option>
                <option value="">Select a category</option>
                <option value="">Select a category</option>
                <option value="">Select a category</option>
                <option value="">Select a category</option>
                -->
            </select>
            </div>


            <!--brands-->

            <div class="form-outline mb-4 w-50 m-auto">

            <select name="product_brand" id="" class="form-select">

                <option value="">Select a brands</option>

                <?php

                    $select_query="select * from `brands`";
                    $result_query=mysqli_query($con,$select_query);

                    while($row=mysqli_fetch_assoc($result_query)){
                        $brand_title=$row['brand_title'];
                        $brand_id=$row['brand_id'];

                        echo "<option value='$brand_id'>$brand_title</option>";


                    }

                ?>

                
                <!--
                <option value="">Brands 1</option>
                <option value="">Brands 1</option>
                <option value="">Brands 1</option>
                <option value="">Brands 1</option>
                <option value="">Brands 1</option>

                -->
       
         
            </select>

            </div>

               <!--images -->

               <div class="form-outline mb-4 w-50 m-auto">

                <label for="product_image1" class="form-label">Product Image-1</label>

                <input type="file" name="product_image1" id="product_image1" class="form-control"
                required="required">

                </div>

                <!--images 2 -->

               <div class="form-outline mb-4 w-50 m-auto">

                <label for="product_image2" class="form-label">Product Image-2</label>

                <input type="file" name="product_image2" id="product_image2" class="form-control"
                required="required">

                </div>


                 <!--images 3 -->


                <div class="form-outline mb-4 w-50 m-auto">

                <label for="product_image3" class="form-label">Product Image-3</label>

                <input type="file" name="product_image3" id="product_image3" class="form-control"
                required="required">

                </div>


                <!--price-->

             <div class="form-outline mb-4 w-50 m-auto">

            <label for="product_price" class="form-label">Product price</label>

            <input type="text" name="product_price" id="product_price" class="form-control"
            placeholder="Enter product price" autocomplete="off" required="required">

            </div>


             <!--submit button-->

             <div class="form-outline mb-4 w-50 m-auto">

           <input type="submit" value="Insert Products" name="insert_product" class="btn btn-success mb-3 px-3">

            </div>

        </form>



    </div>


    <!--SCRIPTS HERE-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    
</body>
</html>