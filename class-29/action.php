<?php
require_once 'vendor/autoload.php';
use \App\classes\Product;
use App\classes\Category;

$products = new Product();
$category = new Category();
$categories = $category->allCategory();

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
        elseif($_GET['page'] == 'category'){
            $category_id = $_GET['catId'];
            $category = $category->getCategory($category_id);
            $productByCategory = $products->productByCategory($category_id);
            include('pages/product.php');
        }
    }



