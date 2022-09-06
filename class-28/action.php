<?php
require_once 'vendor/autoload.php';
use \App\classes\Product;

    $products = new Product();
    if (isset($_GET['page'])){
        if($_GET['page'] == 'home'){
            $products = $products->allProduct();
            include 'pages/home.php';
        }
        elseif($_GET['page'] == 'details'){
            $product_id = $_GET['id'];
            $productById = $products->productDetails($product_id);
            include('pages/product-details.php');
        }
    }



