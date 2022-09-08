<?php


namespace App\classes;


class Category
{
    public $categories;

    public function allCategory()
    {
        return [
            [
                'id' => 1,
                'name' => 'Computer'

            ],
            [
                'id' => 2,
                'name' => 'Mobile'

            ]
        ];
    }

    public function getCategory($catId)
    {
        $this->categories = $this->allCategory();
        foreach ($this->categories as $category) {
            if ($category['id'] == $catId)
                return $category;
        }
    }

}