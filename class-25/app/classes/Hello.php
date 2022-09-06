<?php

namespace App\classes;

class Hello{
    public $message;
    public $x;
    public $arr;
    public $array2;

    public function __construct()
    {
        $this->message='hello world';
        $this->x = 10;
        $this->arr = array(1, 2, 3, 'lol'); // indexed or numeric array
        $this->array2 = array(            // associative array
            1 => '50',
            'a' => 'lol',
            'b' =>  'poll');

    }

    public function index()
    {
        echo $this -> message.'<br>';

        // for($this->x = 10; $this->x < 50; $this->x++)
        // {
        //     echo $this->x.' ';
        // }
    
        // $this->x;
        // while($this->x < 150)
        // {
        //     echo $this->x.' ';
        //     $this->x++;
        // }
        echo '<br>';
        // do{
        //     echo $this->x.' ';
        //     $this->x++;
        // }
        // while($this->x < 150);
        
        print($this->arr[3].'<br>');
        $len = count($this->arr);
        for($this->x = 0; $this->x < $len; $this->x++ )  print($this->arr[$this->x].'<br>'); echo '<br>';
        // echo '<pre>';
        // print_r($this->arr);
        // var_dump($this->arr);echo '<br>';

        // print_r($this->array2);
        // var_dump($this->array2);

        echo '<pre>';
        foreach($this->arr as $key => $value)
        {
            echo $key.' => '.$value.'<br>';
        }
        echo '<br>';

        foreach($this->array2 as $key => $value)
        {
            echo $key.' => '.$value.'<br>';
        }
        echo '<br>';

        foreach($this->array2 as $value)
        {
            echo $value.' ';
        }

    }
}