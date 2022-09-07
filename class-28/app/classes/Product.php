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
                'categoryId' => '1',
                'name' => 'HP Pro G1',
                'price' => '505000 TK',
                'CompanyName' => 'HP',
                'description' => 'Best Laptop',
                'image' => 'hp2.png'
            ],
            [
                'id' => 2,
                'brandId' => '2',
                'categoryId' => '1',
                'name' => 'Dell S1',
                'price' => '3500 TK',
                'CompanyName' => 'Dell',
                'description' => 'Super Laptop',
                'image' => 'dell.jpg'
            ],
            [
                'id' => 3,
                'brandId' => '3',
                'categoryId' => '1',
                'name' => 'DCL G1',
                'price' => '505000 TK',
                'CompanyName' => 'DCL',
                'description' => 'Best Laptop',
                'image' => 'dcl2.jpg'
            ],
            [
                'id' => 4,
                'brandId' => '4',
                'categoryId' => '2',
                'name' => 'Samsung A1',
                'price' => '505000 TK',
                'CompanyName' => 'Samsung',
                'description' => 'Best Mobile',
                'image' => 'mobile6.png'
            ],
            [
                'id' => 5,
                'brandId' => '4',
                'categoryId' => '2',
                'name' => 'Samsung M1',
                'price' => '505000 TK',
                'CompanyName' => 'Samsung',
                'description' => 'High Mobile',
                'image' => 'mobile4.png'
            ],
            [
                'id' => 6,
                'brandId' => '4',
                'categoryId' => '2',
                'name' => 'Samsung G5',
                'price' => '505000 TK',
                'CompanyName' => 'Samsung',
                'description' => 'Super Mobile',
                'image' => 'mobile5.png'
            ],


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

 