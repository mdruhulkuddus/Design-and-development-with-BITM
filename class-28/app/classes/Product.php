<?php 
namespace App\classes;
use App\classes\Category;

 class Product
 {
    public $product = [];
    public $result = [];
    public $allPro;
    public $products;
    public $categories;
    public function __construct()
    {
        $this->product = [
            [
                'id' => 1,
                'brandId' => '1',
                'categoryId' => '2',
                'name' => 'New Laptop',
                'price' => '505000 TK',
                'CompanyName' => 'HP',
                'description' => 'Best Laptop',
                'image' => 'hp2.png'
            ],
            [
                'id' => 2,
                'brandId' => '2',
                'categoryId' => '1',
                'name' => 'Best Laptop',
                'price' => '3500 TK',
                'CompanyName' => 'Dell',
                'description' => 'Best Laptop',
                'image' => 'dell.jpg'
            ],
            [
                'id' => 3,
                'brandId' => '3',
                'categoryId' => '2',
                'name' => 'Super Laptop',
                'price' => '505000 TK',
                'CompanyName' => 'DCL',
                'description' => 'Best Laptop',
                'image' => 'dell2.jpg'
            ],

            [
                'id' => 4,
                'brandId' => '1',
                'categoryId' => '1',
                'name' => 'Best Laptop',
                'price' => '3500 TK',
                'CompanyName' => 'HP',
                'description' => 'Best Laptop',
                'image' => 'hp.jpg'
            ],
            [
                'id' => 5,
                'brandId' => '3',
                'categoryId' => '2',
                'name' => 'Best Laptop',
                'price' => '505000 TK',
                'CompanyName' => 'DCL',
                'description' => 'Best Laptop',
                'image' => 'dcl.png'
            ],
            [
                'id' => 6,
                'brandId' => '1',
                'categoryId' => '1',
                'name' => 'Super Laptop',
                'price' => '3500 TK',
                'CompanyName' => 'HP',
                'description' => 'Best Laptop',
                'image' => 'dcl2.jpg'
            ]
        ];
    }


    public function allProduct(){
        return $this->product;
     }

     public function productDetails($id){
        $this->products = $this->allProduct();
//        $this->categories = $this->allCategory();

        foreach ($this->products as $product){
            if($product['id'] == $id){
                return $product;
            }
        }

     }

//     public function productDetails($product_id){
//       $this->allPro = $this->allProduct();
//       foreach($this->allPro as $item)
//        if($item['id'] == $product_id){
//            array_push($this->result, $item);
//        }
//        return $this->result;
//     }

 }

 