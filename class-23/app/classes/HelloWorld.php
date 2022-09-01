<?php


namespace App\classes;

class HelloWorld
{
    public $message;  // property
    public $first_Name; // snake_case
    public $lastName; // camelCase
    public $FullName; // PascalCase
    public $x;
    public $y;

    public function __construct($data) // method // here data is parameter
    {
//        $this->message = "Hello World"; // -> object operator

//        $this->message = $data;
        $this->message = false;
        $this->message = 10;
        $this->message = '10';
        $this->x=10;
        $this->y=20;
    }

    public function index()
    {
        echo $this->message;
        echo $this->first_Name = ' ' . ' <br>' . 'Ruhul ' . ' ' . $this->lastName = ' Kuddus <br>'.$this->FullName = ' MRK ';
        echo gettype($this->message);

        echo '<br> X = '.$this->x .' Y = '.$this->y.'<br>';
        echo $this -> x + $this -> y . '<br>';
        echo $this -> x - $this -> y . '<br>';
        echo $this -> x * $this -> y . '<br>';
        echo $this -> x / $this -> y . '<br>';
        echo $this -> x % $this -> y . '<br>';
        echo $this -> x ** $this -> y . '<br>';




        echo $this -> x += $this -> y ;
        echo '<br>';
        echo $this -> x -= $this -> y ;  echo '<br>';
        echo $this -> x *= $this -> y ;  echo '<br>';
        echo $this -> x /= $this -> y ;  echo '<br>';
        echo $this -> x %= $this -> y ;  echo '<br>';
        echo $this -> x **= $this -> y ;  echo '<br>';

    }





    /*
     * arithmatic operator : + - * / % ++ -- **
     * assignment operator : = += -= %=
     * conditional operator : < > >= <= != == === !==
     * logical operator : && || !
     * 
     */

}
