<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
</head>
<style>
    .admin_img{
    width: 100px;
    object-fit: contain;

    }
    .footer{
        position:absolute;
        bottom:0;
    }
</style>

<body>
    
    <!--navbar -->

    <div class="container-fluid p-0">
        <!--first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">

            <div class="container-fluid">

            <img src="../product/logoo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">

                    <ul class="navbar-nav">
                        <li class="nan-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>

                </nav>
            </div>

        </nav>
        <!--second child -->

        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!--third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../product/pn-juice.jpg" alt="" class="admin_img"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center m-5">

                        <!--button*10>a.nav-link text-light bg-info my-1 -->
                    <button class="my-3"><a href="" class="nav-link text-light bg-success my-1 ">Insert Products</a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-success my-1">View Products</a></button>
                    <button class="my-3"><a href="admin_index.php?insert_catagory" class="nav-link text-light bg-success my-1">Insert Categories</a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button class="my-3"><a href="admin_index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-success my-1">All Orders</a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div>
        </div>

        <!--fourth child -->

        <div class="container my-3">
            <?php
            if(isset($_GET['insert_catagory'])){
                
                include('insert_categories.php');

            } 
            if(isset($_GET['insert_brand'])){
                
                include('insert_brands.php');

            }    
            ?>
        </div>

        <!--last child -->
        <div class="bg-info p-2 text-center footer">
            <p>All rights reserved @- Designed by jayesh-2023</p>
        </div> 
    </div>


    <!--SCRIPTS HERE-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    
</body>
</html>