<?php
require_once 'vendor/autoload.php';
use App\classes\Product;
use App\classes\Category;
use App\classes\Brand;

    $products = new Product();
    $categories = new Category();
    $brands = new Brand();

    if (isset($_GET['page'])){
        if($_GET['page'] == 'home'){
            $products = $products->allProduct();
            include 'pages/home.php';
        }
        elseif($_GET['page'] == 'details'){
            $product_id = $_GET['id'];
            $category_id = $_GET['catID'];
            $brand_id = $_GET['brandID'];
            $productById = $products->productDetails($product_id);
            $categoryOfProduct = $categories->productCategory($category_id);
            $brandOfProduct = $brands->productBrand($brand_id);
            include('pages/product-details.php');
        }
    }



