<?php
require_once 'vendor/autoload.php';

use App\classes\Student;
use App\classes\Product;


if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        $student = new Student();
        $students = $student->allStudents();
        include('pages/home.php');
    }
    elseif($_GET['page'] == 'about'){
       include('pages/about.php');
    }
    elseif($_GET['page'] == 'product'){
        $product = new Product();
        $products = $product->allProduct();
       include('pages/product.php');
    }
    elseif($_GET['page'] == 'product-details'){
        $product_id = $_GET['id'];
        $productDet = new Product();
        $proDetails = $productDet->productDetails( $product_id);
       include('pages/product-details.php');
    }
}

