<?php


namespace App\classes;


class Brand
{
    public $brands;
    public function getBrand($brandId){
        $this->brands = $this->allBrand();
        foreach ($this->brands as $brand){
            if($brand['id'] == $brandId)
                return $brand;
        }

    }
    public function allBrand()
    {
        return[
          [
              'id' => 1,
              'name' => 'HP'
          ],
          [
              'id' => 2,
              'name' => 'DELL'
          ],
          [
              'id' => 3,
              'name' => 'DCL'
          ],
          [
              'id' => 4,
              'name' => 'Samsung'
          ]
        ];
    }
}