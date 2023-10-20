<?php
    include('includes/connect.php');
    include('function/common_function.php');
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website using PHP and MySql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">


</head>
<body>
  

    <!--NAVBAR HERE-->
    <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="./product/logoo.png" alt="" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="display_all.php">Products</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i><sup><?php cart_item();?></sup></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Total Price : <?php total_cart_price()?>/-</a>
                </li>
                
            </ul>
            <form class="d-flex" role="search" action="search_product.php" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" name="search_data" aria-label="Search">
                <!--<button class="btn btn-outline-light" type="submit">Search</button>-->
                <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">

            </form>
            </div>
        </div>
        </nav>

        
        <?php

        //calling  cart function here
        cart();
        ?>


        <!--Second  child HERE-->

        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">

        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Welcome Guest</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
        </ul>

        </nav>

        

        <!--third  child HERE-->

        <div class="bg-light">
            <h3 class="text-center">
                Hidden Store
            </h3>

            <p class="text-center">Communication is at the heart of e-commerce and community</p>
        </div>

        <!--Fourth  child HERE  cart images-->

        <div class="row px-2">
            <div class="col-md-10">
                <!--products HERE-->

                <div class="row">



                   
                    
                
                <!--fetching products here -->

                    <?php

                    //calling function

                        //getproducts();

                        view_details();

                        get_unique_category();

                        get_unique_brand();


                    /* 

                    $select_query="select * from `products` order by rand() limit 0,12";
                    $result_query=mysqli_query($con,$select_query);
                    //$row=mysqli_fetch_assoc($result_query);

                    //echo $row['product_title'];

                    while($row=mysqli_fetch_assoc($result_query)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_description=$row['product_description'];
                        $product_image1=$row['product_image1'];
                        $product_price=$row['product_price'];
                        $category_id=$row['category_id'];
                        $brand_id=$row['brand_id'];

                        //echo $product_title;
                        //echo "<br>";
                        echo "<div class='col-md-4 mb-2'>
                        <div class='card' >
                            <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_description</p>
                                <p class='card-text'>$product_price</p>
                                <a href='#' class='btn btn-info'>Add to cart</a>
                                <a href='#' class='btn btn-secondary'>View More</a>
                            </div>
                        </div>
                    </div>";
                        
                    }
                    */

                    ?>
                    

                    <!--<div class="col-md-4 mb-2">
                        <div class="card" >
                            <img src="./product/apple1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Fresh Apple</h5>
                                <p class="card-text">Apples are good for health.</p>
                                <p class="card-text">Price : 100/-</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" >
                            <img src="./product/mango.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Fresh Mango</h5>
                                <p class="card-text">Mangoes are good for health.</p>
                                <p class="card-text">Price : 400/-</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./product/orange1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Fresh orange</h5>
                                <p class="card-text">Orange are good for health.</p>
                                <p class="card-text">Price : 120/-</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./product/strawberry.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Fresh Strawberry</h5>
                                <p class="card-text">Strawberry are good for health.</p>
                                <p class="card-text">Price : 350/-</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./product/pineapple.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Fresh pineapple</h5>
                                <p class="card-text">Pineapple are good for health.</p>
                                <p class="card-text">Price : 250/-</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src="./product/dairy.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Dairy Milk</h5>
                                <p class="card-text">Dairy Milk Chocolate are very testy.</p>
                                <p class="card-text">Price : 200/-</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                -->
                </div>
            </div>
            <div class="col md-2 bg-secondary p-0">
                <!--SIDENAV HERE-->
                <ul class="navbar-nav me-auto text-center">
                    <!--brands dislpayed-->

                    <li class="nav-item bg-info">
                        <a href="" class="nav-link text-light"><h4>Delivery Brands</h4></a>
                    </li>

                    <!--Php code here for brand  display data-->
                    <?php

                    //calling brand side nav function here

                    getbrands();
                    /*

                        $select_brands="select * from `brands`";

                        $result_brands=mysqli_query($con,$select_brands);
                        //$row_data=mysqli_fetch_assoc($result_brands);

                        //echo $row_data['brand_title'];
                        //echo $row_data['brand_title'];

                        while($row_data=mysqli_fetch_assoc($result_brands)){
                            $brand_title=$row_data['brand_title'];
                            $brand_id=$row_data['brand_id'];

                            //echo $brand_title;

                            echo "<li class='nav-item '><a href='index.php?brand=$brand_id' 
                            class='nav-link text-light'>$brand_title</a></li>";
                        }

                        */


                    ?>

                    
                    <!--<li class="nav-item ">
                        <a href="" class="nav-link text-light">Brand-1</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">Brand-2</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">Brand-3</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">Brand-4</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">Brand-5</a>
                    </li>
                    -->

                </ul>

                <ul class="navbar-nav me-auto text-center">

                    <!--Categaries dislpayed-->

                    <li class="nav-item bg-info">
                        <a href="" class="nav-link text-light"><h4>Categories</h4></a>
                    </li>

                    <!--Php code here for  cat display data-->
                    <?php

                    //calling categories side nav function here

                        getcategories()
                    /*

                        $select_categories="select * from `categories`";

                        $result_categories=mysqli_query($con,$select_categories);
                        //$row_data=mysqli_fetch_assoc($result_brands);

                        //echo $row_data['brand_title'];
                        //echo $row_data['brand_title'];

                        while($row_data=mysqli_fetch_assoc($result_categories)){
                            $category_title=$row_data['category_title'];
                            $category_id=$row_data['category_id'];

                            //echo $brand_title;

                            echo "<li class='nav-item '><a href='index.php?category=$category_id' 
                            class='nav-link text-light'>$category_title</a></li>";
                        }
                        */


                    ?>


                    <!--
                    <li class="nav-item ">
                        <a href="" class="nav-link text-light">Categories-1</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">Categories-2</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">Categories-3</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">Categories-4</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">Categories-5</a>
                    </li>

                    -->

                </ul>

            </div>
        </div>
    

          <!--include footer-->
          <?php
            include("./includes/footer.php");
            ?>
    </div>



    <!--SCRIPTS HERE-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    
</body>
</html>