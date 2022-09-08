<?php

namespace App\classes;

use App\classes\Category;
use App\classes\Brand;


class Product
{
    public $product = [];
    public $res = [];
    public $brands;
    public $brandById;
    public $products;
    public $categories;
    public $categoriesById;

    public function __construct()
    {
        $this->product = [
            [
                'id' => 1,
                'brandId' => '1',
                'categoryId' => '1',
                'name' => 'HP Pro G1',
                'price' => '505000 TK',
                'description' => 'Best Laptop',
                'image' => 'hp2.png'
            ],
            [
                'id' => 2,
                'brandId' => '2',
                'categoryId' => '1',
                'name' => 'DELL H2',
                'price' => '3500 TK',
                'description' => 'Best Laptop',
                'image' => 'dell.jpg'
            ],
            [
                'id' => 3,
                'brandId' => '3',
                'categoryId' => '1',
                'name' => 'DCL T2',
                'price' => '505000 TK',
                'description' => 'Best Laptop',
                'image' => 'dcl2.jpg'
            ],

            [
                'id' => 4,
                'brandId' => '4',
                'categoryId' => '2',
                'name' => 'Samsung M2',
                'price' => '3500 TK',
                'description' => 'Best Laptop',
                'image' => 'mobile6.png'
            ],
            [
                'id' => 5,
                'brandId' => '4',
                'categoryId' => '2',
                'name' => 'Samsung A1',
                'price' => '505000 TK',
                'description' => 'Best Laptop',
                'image' => 'mobile4.png'
            ],
            [
                'id' => 6,
                'brandId' => '4',
                'categoryId' => '2',
                'name' => 'Samsung G2',
                'price' => '3500 TK',
                'description' => 'Best Laptop',
                'image' => 'mobile5.png'
            ]
        ];
    }


    public function allProduct()
    {
        return $this->product;
    }

    public function productDetails($id)
    {
        $this->products = $this->allProduct();
        foreach ($this->products as $product) {
            if ($product['id'] == $id) {
                $this->categories = new Category();
                $this->categoriesById = $this->categories->getCategory($product['categoryId']);
                $product['categoryName'] = $this->categoriesById['name'];

                $this->brands = new Brand();
                $this->brandById = $this->brands->getBrand($product['brandId']);
                $product['brandName'] = $this->brandById['name'];
                return $product;
            }
        }
    }

    public function productByCategory($category_id)
    {
        $this->products = $this->allProduct();
        foreach ($this->products as $product) {
            if ($product['categoryId'] == $category_id) {
                array_push($this->res, $product);
            }
        }
        return $this->res;
    }


}

 