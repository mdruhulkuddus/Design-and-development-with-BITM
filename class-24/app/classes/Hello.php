<?php

namespace App\classes;

class Hello{

    public $message;
    public $x;
    public $y;
    public $paymentWays;
    public function __construct()
    {
        $this->message='hello world';
        $this-> x = 100;
        $this -> y = 200;
        $this -> z = 30;
        $this->paymentWays='card';
    }

    public function index()
    {
        echo $this -> message.'<br>';

        // echo $this->x++.'<br>'; // 10
        // echo ++$this->x.'<br>'; // 12
        // echo $this->x--.'<br>'; // 12
        // echo --$this->x.'<br>'; // 10
        // echo -$this->x.'<br>'; // 10

        // echo ($this->x > $this->y).'<br>'; // 1
        // echo ($this->x < $this->y).'<br>'; // 0
        // echo ($this->x <= $this->y).'<br>'; // 1
        // echo ($this->x <= $this->y).'<br>'; // 1
        // echo ($this->x  == $this->y).'<br>'; // 0 
        // echo ($this->x  === $this->y).'<br>'; // 0 
        // echo ($this->x  != $this->y).'<br>'; // 0 
        // echo ($this->x  !== $this->y).'<br>'; // 0 type with not equal 

        echo ($this->x  > $this->y && $this->x == $this-> z); echo ' 0 <br>'; // 0
        echo ($this->x  > $this->y && $this->x < $this-> z); echo '0 <br>'; //0
        echo ($this->x  < $this->y && $this->x == $this-> z) . '0 <br>'; // 0
        echo ($this->x  < $this->y && $this->x < $this-> z). '<br>';; // 1
        
        echo ($this->x  > $this->y || $this->x == $this-> z); echo '0 <br>'; // 0
        echo ($this->x  > $this->y || $this->x < $this-> z); echo '<br>'; //1
        echo ($this->x  < $this->y || $this->x == $this-> z) . '<br>'; // 1
        echo ($this->x  < $this->y || $this->x < $this-> z). '<br>';; // 1

        if($this->x > $this->y && $this->x > $this->z)
            echo 'X = '.$this->x. ' is big';
        elseif($this->y > $this->x && $this->y > $this->z)
            echo 'Y = '.$this->y.' is big';
        else echo 'Z = '.$this->z.' is big';
        echo '<br>';

        switch($this->paymentWays)
        {
            case 'card':
                if($this->x < $this->y) echo 'He find 10% discount';
                else echo ' hello 100';
                break;
            case 'bkash':
                echo 'hello 5';
                break;
            default:
                echo '<br> not found <br>';

        }

    }
}

?>

