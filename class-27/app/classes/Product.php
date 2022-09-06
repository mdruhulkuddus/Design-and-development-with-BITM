<?php 
namespace App\classes;

 class Product
 {
    public $product = [];
    public $result = [];
    public $allPro;
    public function __construct()
    {
        $this->product = [
            [
                'id' => 1,
                'name' => 'New Laptop',
                'price' => '505000 TK',
                'brand' => 'HP',
                'description' => 'Best Laptop',
                'image' => 'hp2.png'
            ],
            [
                'id' => 2,
                'name' => 'Best Laptop',
                'price' => '505000 TK',
                'brand' => 'Dell',
                'description' => 'Best Laptop',
                'image' => 'dell.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Super Laptop',
                'price' => '505000 TK',
                'brand' => 'DCL',
                'description' => 'Best Laptop',
                'image' => 'dcl.jpg'
            ]
        ];
    }

    public function allProduct(){
        return $this->product;
     }

     public function productDetails($product_id){
       $this->allPro = $this->allProduct(); 
       foreach($this->allPro as $item)
        if($item['id'] == $product_id){
            array_push($this->result, $item);
        }
        return $this->result;
     }

 }

 